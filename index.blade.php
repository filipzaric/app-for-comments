@extends('test')

@section('content')

<h1>All comments</h1>

 <hr/>

	<ul>
		@foreach($comments as $comment)
			<li>
				{{ $comment->comment_text }}
				 <p>
					<span class="plus_grade">{{$comment->grade_plus }}</span><a href="{{URL::to('votes', ["id" => $comment->id, "option" => 'plus'])}}" class="plus">+</a>
					<span class="minus_grade">{{ $comment->grade_minus }}</span><a href="{{URL::to('votes', ["id" => $comment->id, "option" => 'minus'])}}" class="minus">−</a>
			 	</p>
			</li>
		@endforeach
	</ul>


<h1>Add a comment</h1>


 <hr/>
 
	{!! Form::open(['url' => '/']) !!}
		<div class="form-group">
			{!! Form::label('comment_text', 'Your Comment: ')!!}
			{!! Form::textarea('comment_text', null, ['class' => 'form-control', 'placeholder'=> 'Enter your comment...']) !!}
		</div>

		<div class="form-group">
			<span>{!! Form::submit('Post comment', ['class' => 'btn btn-primary form-control']) !!}</span>
		</div>

	{!! Form::close() !!}

	@if($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

@stop