<h2>hola desde alumnos index</h2>
<a href="{{route('alumnos.create')}}">Nuevo alumno</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Matrícula</th>
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alumnos as $alumno)
        <tr>
            <td>{{$alumno->id}}</td>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellido_paterno}}</td>
            <td>{{$alumno->apellido_materno}}</td>
            <td>{{$alumno->matricula}}</td>
            <td>{{$alumno->correo}}</td>
        </tr>
        @endforeach
    </tbody>
</table>