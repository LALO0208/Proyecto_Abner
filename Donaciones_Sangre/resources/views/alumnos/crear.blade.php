<form action="{{route('alumnos.store')}}" method="POST">
    @csrf
 <input type="text" name= "nombre" placeholder= "Nombre">
 <br>
 <br>
 <input type="text" name= "apellido_paterno" placeholder= "apellido paterno">
<br>
<br>
 <input type="text" name= "apellido_materno" placeholder= "apellido materno">
<br>
<br>
 <input type="text" name= "matricula" placeholder= "matricula">
<br>
<br>
 <input type="text" name= "correo" placeholder= "correo">
 <br>
 <br>
<button type="submit">Guardar</button>
</form>