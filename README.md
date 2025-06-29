![image](https://github.com/user-attachments/assets/18950a4a-814b-4b2a-a5c0-36adf112f825)

![image](https://github.com/user-attachments/assets/b149520e-8bb4-43b0-9117-6090ee4678dc)


![image](https://github.com/user-attachments/assets/03037ac8-fa99-49c7-aad8-eb3a13cf4783)


<<<<<<< HEAD
<<<<<<< HEAD
# TestEcomm
=======
🛒 Laravel Admin Panel – Product & Category Management
This is a beginner-friendly Laravel Admin Panel project for managing Categories and Products.
Built with Laravel 10+, MySQL, Blade, and Laravel default authentication (no external packages).

📦 Tech Stack

| 🔧 Framework  | 💡 Feature                      |
| ------------- | ------------------------------- |
| Laravel 10+   | MVC Web Framework (PHP 8.1+)    |
| MySQL         | Relational DBMS                 |
| Bootstrap 5   | Clean, responsive Blade UI      |
| Auth (Custom) | Laravel’s built-in login system |


⚙️ Quick Start

| 🧩 Step                 | 🛠️ Command / Info                                                                    |
| ----------------------- | ------------------------------------------------------------------------------------- |
| 📦 Install Dependencies | `composer install`                                                                    |
| ⚙️ Setup `.env` File    | `cp .env.example .env`                                                                |
| 🛠️ Configure Database  | Update `.env`:<br>`DB_DATABASE=laravel_admin`<br>`DB_USERNAME=root`<br>`DB_PASSWORD=` |
| 💡 Create Database      | Manually create the `laravel_admin` database in MySQL                                 |
| 🔑 Generate App Key     | `php artisan key:generate`                                                            |
| 🗃️ Migrate & Seed      | `php artisan migrate --seed`                                                          |
| 🔗 Link Storage         | `php artisan storage:link`                                                            |
| 🌐 Launch Local Server  | `php artisan serve` → Visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)           |




🔐 Admin Login

| Field    | Value             |
| -------- | ----------------- |
| Email    | `admin@admin.com` |
| Password | `password`        |



✨ Features Overview

| ✅ Feature             | Description                       |
| --------------------- | --------------------------------- |
| Category Module       | Full CRUD                         |
| Product Module        | Full CRUD + Image Upload          |
| Form Validation       | Via `FormRequest` classes         |
| Bootstrap UI          | Blade + Bootstrap 5 (CDN)         |
| Auth-Protected Routes | Only accessible after login       |
| Flash Messages        | Success and error alerts included |
| Dashboard Stats       | Total Products / Categories count |



🧾 Folder Structure

app/
├── Http/
│   ├── Controllers/
│   │   ├── Auth/
│   │   ├── CategoryController.php
│   │   └── ProductController.php
│   └── Requests/
├── Models/
│   ├── Category.php
│   └── Product.php

resources/views/
├── layouts/
│   └── app.blade.php
├── auth/
│   ├── login.blade.php
│ 
├── dashboard.blade.php
├── categories/
├── products/

routes/
└── web.php

database/seeders/
└── DatabaseSeeder.php


🧠 Developer Notes

| 💡 Info | Details                                                         |
| ------- | --------------------------------------------------------------- |
| Auth    | Uses Laravel’s native session-based auth (no Breeze/Jetstream)  |
| UI      | Clean UI with Bootstrap 5 & Bootstrap Icons via CDN             |
| Routes  | Protected using `auth` middleware                               |
| Slug    | Can be auto-generated or manually entered                       |
| Uploads | Images saved under `/public/storage/uploads` via `storage:link` |
>>>>>>> 03bc4cb (Initial Laravel Admin Panel Commit)
=======
# TestEcomm
>>>>>>> c344336194587529d81a31b020aec6098db4573f
