<?php
namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        Category::create(['name' => 'Electronics', 'status' => 'Active']);
        Category::create(['name' => 'Clothing', 'status' => 'Active']);

        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest model smartphone',
            'price' => 699.99,
            'category_id' => 1,
            'status' => 'In Stock',
        ]);
    }
}