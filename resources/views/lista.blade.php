@foreach ($alumnos as $alumno)
 <tr>
 <td>{{ $alumno->nombre_apellido }}</td>
 <td>{{ $alumno->edad }}</td>
 <td>{{ $alumno->direccion }}</td>
 <td>
 <a href="/alumnos/ver/{{$alumno->id}}" >Ver</a>
 <a href="/alumnos/editar/{{$alumno->id}}" >Editar</a>
 <a href="/alumnos/eliminar/{{$alumno->id}}" >Eliminar</a>
 </td>
</tr>
@endforeach
Hola