laravel-seeder-belgian-cities
=============================

A simple Laravel migration + seeder for Belgian postal codes and city names
Add the migration and seed class to your Laravel project and just call the seeder like you would do normally in DatabaseSeeder.php

$this->call('CitiesTableSeeder');

When you run artisan migrate:refresh --seed it will create a table called cities with three columns:
(- id)
- name
- postal
- province