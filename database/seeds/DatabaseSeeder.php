<?php

use Illuminate\Database\Seeder;

use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
		
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');

		$this->call('FabricanteSeeder');
		$this->call('VehiculoSeeder');

		// Vaciamos la tabla antes de introducir los usuarios porque queremos mantener solo un registro.
		User::truncate();
		DB::table('oauth_clients')->truncate();
		$this->call('UserSeeder');
		$this->call('Oauth2Seeder');
	}

}
