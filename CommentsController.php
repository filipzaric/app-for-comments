<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\HttpResponde;
use App\Http\Controllers\Controller;
use App\Comment;
use App\Http\Requests\CreateComment;


class CommentsController extends Controller {

/**************************
* Display all comments
**************************/
	public function index()
	{
		$comments = Comment::latest()->get();

		return view('index', compact('comments'));

	}

/**************************
* Save comment
**************************/
	public function store(CreateComment $request)
	{
		Comment::create($request->all());

		return redirect('/');
	}

	public function votes($id, $option)
	{
		
		$comment = Comment::findOrFail($id);

		if ($option == 'plus') {
			$comment->increment('grade_plus');
			return $comment->grade_plus;
		} else {
			$comment->increment('grade_minus');
			return $comment->grade_minus;
		}
	}
}