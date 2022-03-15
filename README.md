Clone this repository and install its dependencies with `composer install` and `npm install`. Then, copy the `.env.example` file to `.env` and supply this:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=yourdatabase
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=yournailhost
MAIL_PORT=1025
MAIL_USERNAME=yourmailusername
MAIL_PASSWORD=yourmailpassword
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
```

Generate a key with `php artisan key:generate`

```
php artisan key:generate
```

Run the migrations `php artisan migrate --seed`

```
php artisan migrate --seed
```


Finally, run the application via `php artisan serve`.

```
php artisan serve
```