## About Marvel-Api

This is a laravel built api that lists out some of the marvel characters within the marvel universe.

##Setting up this repository

git clone https://github.com/Pwawazi/marvel.git \
cd marvel \
composer install \
cp .env.example .env \
php artisan key:generate\
php artisan cache:clear && php artisan config:clear \
php artisan serve \


##Unforseen errors during launch may include:
Ensure the php.ini on the host you serve from has the path of your cacert.pem. Without it, the application may raise cURL:60 errors due to SSL connections failing as a result of calling the marvel developers api.