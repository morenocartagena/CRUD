<form action="{{ url('/user') }}" method="post" enctype="multipart/form-data" >
@csrf

    <label for="Nombre">Nombre</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="Password">Password</label>
    <input type="password" name="password" id="password">
    <br>
    <label for="Email">Email</label>
    <input type="text" name="email" id="email">
    <br>
    <input type="submit" value="Guardar usuario">
    <br>

</form>