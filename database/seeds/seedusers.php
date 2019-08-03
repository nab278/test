<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class seedusers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    echo "Seeding .....";


								$data = array(
								    array(
								        'name'=>'Admin User',
								        'email' => 'admin@admin.com',
								        'password'=>Hash::make('123456'),
								        'role'=>1, //1 = Admin
								        'created_at'=>date('Y-m-d H:i:s'),
								        'updated_at'=> date('Y-m-d H:i:s')
								       ),
								    array(
								        'name'=>'Dealer',
								        'email' => 'dealer@dealer.com',
								        'password'=>Hash::make('123456'),
								        'role'=>2,//2 = Dealer
								        'created_at'=>date('Y-m-d H:i:s'),
								        'updated_at'=> date('Y-m-d H:i:s')
								       ),
								    
								);



								User::insert($data);				


    }




}
