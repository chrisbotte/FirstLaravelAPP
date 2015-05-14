<?php
// model file name is singluar version of mtaching table name that is plural
// authors table has model file author.php
// class name must be same as filename

class Author extends Eloquent{
		protected $fillable = array('name', 'bio');

		public static $rules = array(
			'name'=>'required|min:2',
			'bio'=>'required_if:name,a|min:10'
		);

		public static function validate($data){
			return Validator::make($data, static::$rules);

		} 


	// if needed .. public static $table = 'someothername';

}


?>