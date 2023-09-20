
# Project_Sem2
h1 😄 hello this is our Website for selling sneakers called "DealZone"
p 👉 If you guys want to download my project, i will show you the following steps:
Move to my git and clone my project: https://github.com/TaiC0/Project2.git

1.1 Then copy the url, move to Vscode IDE and Type”git clone https://github.com/TaiC0/Project2.git
”
	•	After that cd to the project by the statement “cd Project2”
	•	Find file .env.example and rename it to .env
	•	Run the following command: 
npm install
composer install
composer update
	•	Run php artisan generate:key
*note: if you struggling with login with google method, please put this .evn file into your already .evn file 
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:0siuBi+xcpz0CFx5Y+R7p3kySVV/2fMzeApxEgtuWS8=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mainProject
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

APP_NAME="shoesadmin"
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=thecot2004@gmail.com
MAIL_PASSWORD=ehyinyxxsulsseek
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="thecot2004@gmail.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
GOOGLE_CLIENT_ID=297362178833-put6784nd4n8h4dfebbj7l1nn1lab0m1.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=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
GOOGLE_REDIRECT=http://127.0.0.1:8000/login/google/callback

	•	Finally, run “php artisan migrate” to generate tables
	•	Move to database, generate a database name “mainProject” or any name that you like
	•	After that import projectt.sql which i have given to receive our exist data 
We very appreciate about your attention of our project! 
If you have any question please contact me by my email address: taicopgm@gmail.com
Best Regards!
