@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="container">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Lista de Etiquetas
							<a href="{{ route('tags.create') }}" class="btn btn-success float-right">Crear</a></h5>
						<div class="card-text">
							</br>
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">ID</th>
										<th scope="col">Nombre</th>
										<th scope="col">Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($tags as $tag)
									<tr>
										<th scope="row">{{ $tag->id}} </th>
										<td>{{ $tag->name }}</td>
										<td>
											<a class="btn btn-primary" href="{{ route('tags.show', $tag->id) }}">Ver</a>
										</td>
										<td>
											<a class="btn btn-secondary" href="{{ route('tags.edit', $tag->id) }}">Editar</a>
										</td>
										<td>
											{!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
												<button class="btn btn-danger">Eliminar</button>
											{!! Form::close() !!}
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{{ $tags->render() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection