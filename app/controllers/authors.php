<?php

class AuthorsController extends BaseController {

	// public $layout = 'layouts.default';

	public function get_index(){

		return View::make('authors.index')
			->with('title','Read in Authors')
			->with('authors', Author::orderBy('name', 'desc')->get());
	}

	public function get_view($id){
		return View::make('authors.view')
			->with('title','Author View Page')
			->with('author', Author::find($id));

	}

	public function add_new(){
		return View::make('authors.new')
			->with('title', 'Add Someone New');
	}

	public function create_new(){
		$validation = Author::validate(Input::all());
		if($validation->fails()){
			return Redirect::route('new_author')->withErrors($validation)->withInput();
		}
		else{
			Author::create(array(
				'name'=>Input::get('name'),
				'bio'=>Input::get('bio')	
			));

			return Redirect::route('authors')->with('message','ALL GOOD');
		}
	}

	public function edit($id){
		return View::make('authors.edit')
			->with('title','Edit Page')
			->with('author',Author::find($id));

	}

	public function update(){
		$id = Input::get('id');
		$validation = Author::validate(Input::all());


		if($validation->fails()){
			return Redirect::route('edit_author',$id)->withErrors($validation)->withInput();

		}
		else{
			$a = Author::find($id);
			$a->bio = Input::get('bio');
			$a->save();
			return Redirect::route('author', $id)->with('message','ALL GOOD');
		}

	}

}

?>