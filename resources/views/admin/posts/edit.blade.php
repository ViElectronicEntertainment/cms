@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Editar Entrada</h5>
						<div class="card-text">
							{!! Form::model($post, ['route' =>['posts.update',$post->id],
							'method' => 'PUT', 'files' => true]) !!}
								@include('admin.posts.partials.form')
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection