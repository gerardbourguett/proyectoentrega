@extends('admin.template.main')

@section('title','Lista de Usuarios')

@section('content')
<a href="{{ (route('users.create')) }}" class="btn btn-info">Registrar Nuevo Usuario</a><br>
  <table class="table table-striped table-hover ">
    <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Tipo</th>
      <th>Acción</th>
    </thead>
    <tbody>
      @foreach($users as $user)
        <tr class="info">
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>
            @if($user->type == "admin")
              <span class="label label-danger">{{ $user->type }}</span>
            @else
              <span class="label label-primary">{{ $user->type }}</span>
            @endif
          </td>
          <td><a href="" class="btn btn-warning"></a> <a href="" class="btn btn-danger"></a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  {!! $users->render() !!}
@endsection
