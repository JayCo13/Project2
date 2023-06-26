<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
class ProfileController extends Controller
{
    public function index()
    {
   
       
        return view('profile');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function edit()
    { $orders = Order::all();
        $user = Auth::user();
        return view('fe.profile', compact('user','orders'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'avatar' => 'image|max:2048', // Assuming avatar is an image file
        ]);

        $user->name = $validatedData['name'];
        $user->last_name = $validatedData['last_name'];
        $user->email = $validatedData['email'];

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = $avatar->getClientOriginalName();
            $avatar->storeAs('public/images', $avatarName);
            $user->avatar = $avatarName;
        }
        

        $user->save();

        return redirect()->route('profilefe')->with('success', 'Profile updated successfully!');
    }
   

}