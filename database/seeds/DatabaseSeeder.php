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
		
		$this->call('FabricanteSeeder');
		$this->call('VehiculoSeeder');

		// Vaciamos la tabla antes de introducir los usuarios porque queremos mantener solo un registro.
		User::truncate();
		$this->call('UserSeeder');
	}

}
