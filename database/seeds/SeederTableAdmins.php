<?php
use Illuminate\Database\Seeder;
class SeederTableAdmins extends Seeder {
	Public function run()
	{
		//kosongkan table admins
		DB::table('admins')->delete();
		//buat data berupa array untuk diinput ke database
		$admins = array (
		array('id'=>'1','noi'=>'105623031','name'=>'Aan Choesni Herlingga','other'=>'Admin SIMAT','email'=>'aan_choesni@ymail.com','password'=>'anchuz2015','activation_code'=>'','remember_token'=>'')
		);
		DB::table('admins')->insert($admins);
	}
}