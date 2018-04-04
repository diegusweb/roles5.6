<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Navegar usuarios',
            'slug' => 'users.index',
            'description' => 'Lista u=y navega todos los usuarios del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Ver detalles de usuarios',
            'slug' => 'users.show',
            'description' => 'Ver en detalle cada usuarios del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Edicion de  usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar los usuarios del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'eliminar usuarios',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier  usuarios del sistema'
        ]);

        //roles

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista u=y navega todos los rol del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Ver detalles de roles',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Creacion de roles',
            'slug' => 'roles.create',
            'description' => 'Ver en detalle cada rol del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Edicion de  roles',
            'slug' => 'roles.edit',
            'description' => 'Editar los rol del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'eliminar roles',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier  rol del sistema'
        ]);

        //productos

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Navegar productos',
            'slug' => 'products.index',
            'description' => 'Lista u=y navega todos los productos del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Ver detalles de productos',
            'slug' => 'products.show',
            'description' => 'Ver en detalle cada producto del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Creacion de productos',
            'slug' => 'products.create',
            'description' => 'Ver en detalle cada producto del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'Edicion de  productos',
            'slug' => 'products.edit',
            'description' => 'Editar los producto del sistema'
        ]);

        \Caffeinated\Shinobi\Models\Permission::create([
            'name' => 'eliminar productos',
            'slug' => 'products.destroy',
            'description' => 'Eliminar cualquier  producto del sistema'
        ]);
    }
}
