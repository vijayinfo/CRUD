<?php

class Post extends Eloquent {
	protected $guarded = array();

	public static $rules = array('author'=>'required|min:4',
	'title'=>'required|min:4',
	'body'=>'required|min:10'
	);

public static function search($keyword){


		return static::where('question','LIKE','%'.$keyword.'%')->paginate(3);

	}
	
}
