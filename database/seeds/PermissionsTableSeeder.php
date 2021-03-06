<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $items = [
            [
                'id'         => '1',
                'name'       => 'view_managers',
                'label'      => 'Admin can view managers',
                'is_admin'   => true,
                'sort_order' => 10,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '2',
                'name'       => 'manage_managers',
                'label'      => 'Admin can manage managers',
                'is_admin'   => true,
                'sort_order' => 20,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '3',
                'name'       => 'assign_manager_roles',
                'label'      => 'Admin can assign roles to managers',
                'is_admin'   => true,
                'sort_order' => 30,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '4',
                'name'       => 'view_users',
                'label'      => 'Admin can view managers',
                'is_admin'   => true,
                'sort_order' => 40,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '5',
                'name'       => 'manage_users',
                'label'      => 'Admin can manage users',
                'is_admin'   => true,
                'sort_order' => 50,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '6',
                'name'       => 'assign_user_roles',
                'label'      => 'Admin can assign roles to users',
                'is_admin'   => true,
                'sort_order' => 60,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '7',
                'name'       => 'view_roles',
                'label'      => 'Admin can view roles',
                'is_admin'   => true,
                'sort_order' => 70,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '8',
                'name'       => 'manage_roles',
                'label'      => 'Admin can manage roles',
                'is_admin'   => true,
                'sort_order' => 80,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '9',
                'name'       => 'assign_permissions',
                'label'      => 'Admin can assign permissions',
                'is_admin'   => true,
                'sort_order' => 90,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '10',
                'name'       => 'manage_permissions',
                'label'      => 'Admin can manage permissions',
                'is_admin'   => true,
                'sort_order' => 100,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '11',
                'name'       => 'manage_menus',
                'label'      => 'Admin can manage menus',
                'is_admin'   => true,
                'sort_order' => 110,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '12',
                'name'       => 'view_plugins',
                'label'      => 'Admin can view plugins',
                'is_admin'   => true,
                'sort_order' => 120,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '13',
                'name'       => 'manage_plugins',
                'label'      => 'Admin can manage plugins',
                'is_admin'   => true,
                'sort_order' => 130,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '14',
                'name'       => 'view_codelist',
                'label'      => 'Admin can view codelist',
                'is_admin'   => true,
                'sort_order' => 140,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '15',
                'name'       => 'manage_codelist',
                'label'      => 'Admin can manage codelist',
                'is_admin'   => true,
                'sort_order' => 150,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '16',
                'name'       => 'view_pages',
                'label'      => 'Admin can view pages',
                'is_admin'   => true,
                'sort_order' => 160,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '17',
                'name'       => 'manage_pages',
                'label'      => 'Admin can manage pages',
                'is_admin'   => true,
                'sort_order' => 170,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '18',
                'name'       => 'manage_languages',
                'label'      => 'Admin can manage languages',
                'is_admin'   => true,
                'sort_order' => 180,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '19',
                'name'       => 'manage_blog',
                'label'      => 'Admin can manage blog',
                'is_admin'   => true,
                'sort_order' => 190,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '20',
                'name'       => 'manage_promotions',
                'label'      => 'Admin can manage promotions',
                'is_admin'   => true,
                'sort_order' => 200,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '21',
                'name'       => 'manage_profile',
                'label'      => 'User can manage their own profile',
                'is_admin'   => null,
                'sort_order' => 210,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'id'         => '22',
                'name'       => 'write_comments',
                'label'      => 'User can write blog comments',
                'is_admin'   => null,
                'sort_order' => 220,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ];

        DB::table('permissions')->insert($items);
    }
}
