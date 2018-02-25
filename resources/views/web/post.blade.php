@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="container">
		<h1>{{$post->name}}</h1>
		<div class="card">
			@if($post->file)
				<img src="{{ $post->file }}" class="card-img-top">
			@endif
			<div class="card-body">
				<h5 class="card-title">Categoria: {{$post->category->name}} </h5>
				<div class="card-text">	{{ $post->excerpt }}
					<hr>
					{{!! $post->body !!}}
					<hr>
					Etiquetas
					@foreach($post->tags as $tag)
					<a href="#">{{$tag->name}}</a> - 
					@endforeach
				</div>			
			</div>
		</div>
	</div>
</div>
@endsection