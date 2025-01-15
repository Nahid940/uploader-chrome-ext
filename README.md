Pull the project from git

Run These commands for this laravel project
1. RUN composer install
2. cp .env.example .env
3. RUN php artisan key:generate
4. Change the .env params specially for DB
5. RUN php artisan migrate
6. RUN php artisan db:seed --class=ProductSeeder

Run backend project with command

php artisan serve

This will run on 8000 or available port

====================================================================

For extension

Enable developer mode in chrome extension setting
Upload the extension from this project folder named 'upload_extension'
Enable the extension and run
In the extension poup search the product with code 111111, 222222, 333333 and product details will appear.
After clicking on the upload button product will be uploaded to the marketplace(Not done for now)


