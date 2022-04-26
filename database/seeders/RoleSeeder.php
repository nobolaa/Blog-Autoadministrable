<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleBlogger = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.home'])->syncRoles([$roleAdmin, $roleBlogger]);

        Permission::create(['name' => 'admin.categories.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.categories.show'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.categories.create'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.categories.edit'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.categories.update'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.categories.destroy'])->assignRole($roleAdmin);
        
        Permission::create(['name' => 'admin.tags.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.tags.show'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.tags.create'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.tags.edit'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.tags.update'])->assignRole($roleAdmin);
        Permission::create(['name' => 'admin.tags.destroy'])->assignRole($roleAdmin);
        
        Permission::create(['name' => 'admin.posts.index'])->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.posts.show'])->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.posts.create'])->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.posts.edit'])->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.posts.update'])->syncRoles([$roleAdmin, $roleBlogger]);
        Permission::create(['name' => 'admin.posts.destroy'])->syncRoles([$roleAdmin, $roleBlogger]);
    }
}
