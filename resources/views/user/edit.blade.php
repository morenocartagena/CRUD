<form action="{{ url('/user/'.$user->id) }}" method="post" enctype="multipart/form-data" >
    @csrf
    {{method_field('PATCH')}}
    
        <label for="Nombre">Nombre</label>
        <input type="text" name="name" value="{{ $user->name }}" id="name">
        <br>
        <label for="Email">Email</label>
        <input type="text" name="email" value="{{ $user->email }}" id="email">
        <br>
        <input type="submit" value="Editar usuario">
        <br>
    
    </form>