composer install
php artisan key:generate --force
php artisan migrate --force
php artisan queue:work &
php artisan serve --host=0.0.0.0 --port=8000