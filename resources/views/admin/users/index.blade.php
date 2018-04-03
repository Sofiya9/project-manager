@extends('admin.layouts.app')

@section('content')

	<div class="container">
		<div class="card">
			<h2 class="card-header">
				Список пользователей
			</h2>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<th>#</th>
						<th>Имя</th>
						<th>E-mail</th>
						<th>Роль</th>
						<th class="text-right">
							<a class="btn btn-outline-success" href="{{route('admin.user.create')}}">Create</a>
						</th>
					</thead>
					@forelse ($users as $key => $user)
					<tr>
						<td>{{++$key}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->role}}</td>
						<td class="text-right">
							<a class="btn btn-outline-primary" href="{{route('admin.user.edit', $user)}}">Edit</a>
							<a class="btn btn-outline-danger" href="{{route('admin.user.destroy', $user)}}">Delete</a>
						</td>
					</tr>
					@empty
						<tr>
							<td colspan="5">
								Нет пользователей
							</td>
						</tr>
					@endforelse
				</table>
			</div>
		</div>
	</div>

@endsection