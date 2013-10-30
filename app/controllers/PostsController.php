<?php

class PostsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	protected $post;

	public function __construct(Post $post)
	{
		$this->post=$post;
	}


	public function index()
	{
		$posts = $this->post->all();

		return View::make('posts.index',compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$v = Validator::make($input,Post::$rules);

		if($v -> passes() ){

			$this->post->create($input);

			return Redirect::route('posts.index')

				->with('message','Post created succesfuly');

		}

		return Redirect::route('posts.create')
		
			->withErrors($v)

			->with('message','There were errors')

			->withInput();


	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function show($id)
	// {
	// 	$post = $this->post->find($id);

	// 	if($post ){

	// 		return View::make('posts.show',compact('post'));
	// 	}

	// }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	public function show($id = null){

		return View::make('posts.show')
			
			->with('title','Q&A-Fast View Question')
			
			->with('post',Post::find($id));
			
	}



	public function edit($id)
	{
		$post = $this->post->find($id);

		if (is_null($post)) {
			
			return Redirect::route('posts.index')

				->with('message','The post was not found');

		}

		return View::make('posts.edit',compact('post'));


	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input =   array_except( Input::all(),'_method');

		$v = Validator::make($input,Post::$rules);

		if ($v -> passes() ) {

			$post = $this->post->find($id);

			$post -> update($input);
			
			return Redirect::route('posts.show',$id)->with('message','Updated succesfully');
		}

		return Redirect::route('posts.edit',$id)
			
			->withErrors($v)
			
			->withInput()
			
			->with('<li class="errors">:message</li>','There were errors');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->post->find($id)->delete();

		return Redirect::route('posts.index')->with('message','The post has been deleted');
	}


	
	public function results($keyword)
	{

		return View::make('posts.results')
		
			->with('title','Q&A-Fast Search Results')

			->with('post',Post::search($keyword));
	}

	public function search()
	{
		$keyword = Input::get('keyword');

		if (empty($keyword)) {
			
			return Redirect::route('posts.index')
				->with('message','No keyword entered, please try again');
		}

			return Redirect::to('results/'.$keyword);
	}


	

}
