@extends('layouts.app')

@section('content')
<div class="container">

<h2>CREAR USUARIO</h2>
<a href="{{ url('/user/create' ) }}" > Crear nuevo usuario </a>
<br><br>

<h2>USUARIOS</h2>
<table class="">
    <thead>
    <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Acciones</th>
    </tr>   
    </thead>
    <tbody>
        @foreach ( $users as $user)          
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td> 
        <a href="{{ url('/user/'.$user->id.'/edit' ) }}">Editar</a>
         | 
        <form action="{{ url('/user/'.$user->id ) }}" method="POST" >
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('Borrar usuario?')" value="Borrar" >
        </form>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
</div>
@endsection