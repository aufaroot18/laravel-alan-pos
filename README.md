# laravel-alan-pos
Alan Pos Website with Laravel

## Installation

- Clone Alan Pos Repository:
```
https://github.com/aufaroot18/laravel-event.git
```
- Install the composer dependencies:
```
composer install
```
- Copy the `.env.example` file to `.env`:
```
cp .env-example .env
```
- Edit `.env` and setting your database:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1   // Your Host
DB_PORT=3306	// Your Port
DB_DATABASE=laravel_alan_pos   // Your Database Name
DB_USERNAME=root    // Your Username
DB_PASSWORD=    // Your Password
```
- Generate application key:
```
php artisan key:generate
```
- Running migrations:
```
php artisan migrate
```
- Running seeders:
```
php artisan db:seed
```

## Demo
Demo Website (Landing Page): [Laravel Alan Pos](https://aufaroot18.github.io/laravel-alan-pos/).

## Authors
Aufa Billah.

## License
GNU General Public License v3.0
