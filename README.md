# UNSCare

UNSCare is a health system information / telemedicine

## Features

- Responsive UI
- Dashboard
- Role-based Access Control

## Installation

UNSCare requires [PHP](https://www.php.net/) v7+ & [Composer](https://getcomposer.org/) v2.2+

Clone the repository or download it then follow this steps
```sh
composer install
//rename .env.example into .env
php artisan key:generate
//create database
//modify 'DB_DATABASE' on .env file with your DB name
php artisan migrate --seed
npm install
npm run dev
php artisan storage:link
php artisan serve
```
