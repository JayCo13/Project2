@extends('fe.layout.layout')

@section('contents')
  <style>
    *{
      font-family:monospace;
      font-size:20px;
    }
    .survey-page {
      text-align: center;
    }
.pr{
  font-size:20px;
  color:red;
  text-decoration:underline;
}
    .choices {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      margin-bottom: 20px;
    }

    .choices img {
      width: 200px;
      height: auto;
      cursor: pointer;
    }

    textarea {
      width: 100%;
      height: 150px;
    }

    .dialog-box {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .dialog-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
    }

    .close-button,.submit {
  margin-top: 10px;
 background-color: #E72727;
  border: none;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

small{
  color:grey;
}
  </style>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
   function selectChoice(choice) {
  var images = document.querySelectorAll('.choices img');
  images.forEach(function(image) {
    image.classList.remove('selected');
    image.style.border = 'none'; // Remove border from all images
  });

  var selectedChoice = document.getElementById('choice-' + choice);
  selectedChoice.classList.add('selected');
  selectedChoice.style.border = '2px solid blue'; // Add border to the selected image

  document.getElementById('selected-choice').value = choice;
}


    function submitForm() {
      var selectedChoice = document.querySelector('.selected');
      if (selectedChoice) {
        document.getElementById('survey-form').submit();
      } else {
        alert('Please select a choice');
      }
    }

    document.addEventListener('DOMContentLoaded', function() {
      var dialogBox = document.getElementById('dialog-box');
      dialogBox.classList.remove('hide');

      document.querySelector('.close-button').addEventListener('click', function() {
        dialogBox.style.display = 'none';
      });

      document.getElementById('survey-form').addEventListener('submit', function(event) {
        event.preventDefault();
        submitForm();
      });
    });
  </script>
 
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ Route('homepage') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ Route('survey') }}">Survey</a></li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->
    <div class="container"> 
  <div class="survey-page">
    <h2>Send Us Opinion now!</h2>
    <br>
    <small>click on the images to mark your choice</small>
    <div class="choices">
     
      @foreach($survey as $surveys)
      @if($surveys->photo != null)
        <img id="choice-{{ $surveys->id }}" src="{{ asset('images/' . $surveys->photo) }}" alt="Image {{ $surveys->id }}" onclick="selectChoice('{{ $surveys->id }}')">
        @endif
      @endforeach
    </div>
    <small>Our pleasure to recieve your comments!</small>
    <form id="survey-form" action="{{ route('survey.submit') }}" method="POST">
    @csrf <!-- Include the CSRF token -->
      <input type="hidden" id="selected-choice" name="user_choice">
      <textarea name="user_provide" placeholder="Provide your feedback" style="color:black;"></textarea>
      <button type="button" onclick="submitForm()" class="submit">Submit</button>
    </form>
  </div>
  <div id="dialog-box" class="dialog-box">
  <div class="dialog-content d-flex flex-column align-items-center">
    <h2 class="text-center">Dear Customers!</h2>
    <p>Welcome to D<span style="color:red;">ea</span>lZone survey site.<br> We would like to collect your opinions on our future products. <br> Even when you give us your opinion, you will receive a <span class="pr">promotion code!</span>   <br> We hope this little gift makes you happy during your purchasing.</p>
    <button class="close-button">Close</button>
  </div>
</div>

  </div>
@endsection
