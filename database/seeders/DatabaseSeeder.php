<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        $superadmin = User::create(
            array_merge($default_user_value, [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('superadmin1234'),
            ])
        );

        $admin = User::create(
            array_merge($default_user_value, [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin1234'),
            ])
        );

        $role_superadmin = Role::create(['name' => 'Super Admin']);
        $role_admin = Role::create(['name' => 'Admin']);

        $permissions = [ 'create articles', 'edit articles', 'delete articles', 'publish articles' ]; // Create and save multiple permissions 
        foreach ($permissions as $permissionName) { 
            $permission = Permission::make([ 'name' => $permissionName, ]); 
            $permission->saveOrFail(); 
        }

        Permission::create(['name' => 'user view']);
        Permission::create(['name' => 'user create']);
        Permission::create(['name' => 'user edit']);
        Permission::create(['name' => 'user delete']);
        Permission::create(['name' => 'role view']);
        Permission::create(['name' => 'role create']);
        Permission::create(['name' => 'role edit']);
        Permission::create(['name' => 'role delete']);
        Permission::create(['name' => 'permission view']);
        Permission::create(['name' => 'permission create']);
        Permission::create(['name' => 'permission edit']);
        Permission::create(['name' => 'permission delete']);
        $superadmin->assignRole($role_superadmin);
        $admin->assignRole($role_admin);
        $role_admin = Role::where('name', 'Admin')->first();
        $role_admin->givePermissionTo(Permission::all());
    }
}
