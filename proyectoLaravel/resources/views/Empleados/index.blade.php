<h1>{{$titulo}}</h1>

@forelse ($empleados as $empleado)
    <h3>{{$empleado['nombre']}}</h3>
    <br>
@empty
    No hay empleados
@endforelse