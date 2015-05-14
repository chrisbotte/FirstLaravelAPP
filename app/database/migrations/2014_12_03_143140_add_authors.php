<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('authors')->insert(array(
			'name'=>'Chris Botte',
			'bio'=>'Great Guy',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s'),
		));	

		DB::table('authors')->insert(array(
			'name'=>'John Smith',
			'bio'=>'Bad Guy',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s'),
		));	

		DB::table('authors')->insert(array(
			'name'=>'Jane Smith',
			'bio'=>'Bad Girl',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s'),
		));	

		DB::table('authors')->insert(array(
			'name'=>'Susan JonesSmith',
			'bio'=>'Bad Girl 2',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s'),
		));	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//DB::table('authors')->where('name', '=', 'Chris Botte')->delete();
		//DB::table('authors')->where('name', '=', 'John Smith')->delete();	
		DB::table('authors')->delete(1);
		DB::table('authors')->delete(2);
		DB::table('authors')->delete(3);
		DB::table('authors')->delete(4);
	}

}
