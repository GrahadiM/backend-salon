<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'              => 'Admin',
            'phone'             => '85767113554',
            'username'          => 'admin',
            'email'             => 'admin@test.com',
            'password'          => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);
        $roleAdmin = Role::create(['name' => 'admin']);
        $permissionsAdmin = Permission::pluck('id','id')->all();
        $roleAdmin->syncPermissions($permissionsAdmin);
        $admin->assignRole([$roleAdmin->id]);

        $owner = User::create([
            'name'              => 'Owner',
            'phone'             => '85767113554',
            'username'          => 'owner',
            'email'             => 'owner@test.com',
            'password'          => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);
        $roleAdmin->syncPermissions($permissionsAdmin);
        $owner->assignRole([$roleAdmin->id]);

        $user = User::create([
            'name'              => 'Customer',
            'phone'             => '85767113554',
            'username'          => 'customer',
            'email'             => 'customer@test.com',
            'password'          => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token'    => Str::random(10),
        ]);
        $roleUser = Role::create(['name' => 'customer']);
        $permissions = [
            'order-C',
            'order-R',
            'order-U',
            'order-D',
            'history-C',
            'history-R',
            'history-U',
            'history-D',
        ];
        $roleUser->syncPermissions($permissions);
        $user->assignRole([$roleUser->id]);
    }
}
