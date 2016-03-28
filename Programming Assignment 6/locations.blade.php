<<!DOCTYPE html>
<html>
	<body>
		@foreach ($locations as $location)
		<p>{{ $location->value}}</p>>
		<ol>
			@foreach($location->stories as $story)
				<li>
					{{ $story->title }}
				</li>
		</ol>
		@endforeach
	<!-- <p>YES!!!!</p> -->
	</body>
</html>>