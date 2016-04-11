@extends('page')

@section('content')
		@foreach ($stories as $story)
		<p>{{ $story->story}}</p>>
		<ol>
			tags: 
			@foreach($story->tags as $tag)
			<li>
				{{ $tag->value }}
			</li>
			@endforeach
		</ol>
		@endforeach
@stop

