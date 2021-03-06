<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'MuQ';
        $user->email = 'muq971118@gmail.com';
        $user->password = '$2y$10$BxRKo3zzLKvRImNcX3ZfreOJP6xpIblyA1PL2jTmEf/SIwPNAUhP.'; //010320wsq
        $user->is_admin = true;
        $user->save();
    }
}
