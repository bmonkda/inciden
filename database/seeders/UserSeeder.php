<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'José Moncada',
            'email' => 'jose@correo.com',
            'password' => bcrypt('12345678')
          ]); //->assignRole('Admin');
      
          $user = User::create([
            'name' => 'Vanessa Coll',
            'email' => 'vanessa@correo.com',
            'password' => bcrypt('12345678')
          ]); //->assignRole('Admin');
          
          $user = User::create([
            'name' => 'Carla Salges',
            'email' => 'carla@correo.com',
            'password' => bcrypt('12345678')
          ]); //->assignRole('Admin');
          
          $user = User::create([
            'name' => 'Jesús Malavé',
            'email' => 'jesus@correo.com',
            'password' => bcrypt('12345678')
          ]); //->assignRole('Soporte');
          
          $user = User::create([
            'name' => 'Carlos Meta',
            'email' => 'carlos@correo.com',
            'password' => bcrypt('12345678')
          ]); //->assignRole('Soporte');
          
          $user = User::create([
            'name' => 'Luis González',
            'email' => 'luis@correo.com',
            'password' => bcrypt('12345678')
          ]); //->assignRole('Soporte');
      
          $user = User::create([
            'name' => 'Usuario',
            'email' => 'usuario@correo.com',
            'password' => bcrypt('12345678')
          ]); //->assignRole('Gestor');
          
          User::factory(2)->create();
        
    }
}
