@section('contenido1')
   {{-- @dd($alumnos)  monitorear cual es el contenido de una variable --}}
    <ul>
        {{-- @foreach ($alumnos as $alumno )
            <li>{{$alumno->nombre}}</li>
        @endforeach --}}
    </ul>
    {{-- bs5- nos da opciones de objetos --}}
<p>@isset($message) {{$message}}
    
@endisset</p>
    <div>
        <a href="{{route('alumnos.create')}}" class='btn button btn-primary'>Nuevo</a>
        <div
            class="table-primary"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Email</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumnos as $alumno )
                        <tr class="">
                            <td scope="row">{{$alumno->id}}</td>
                            <td>{{$alumno->nombre}}</td>
                            <td>{{$alumno->apellidoPat}}</td>
                            <td>{{$alumno->email}}</td>
                            <td><a href="{{route('alumnos.edit', $alumno->id)}}" class='btn button btn-primary'>EDITAR</a></td>
                            <td><a href="{{route('alumnos.show',$alumno->id)}}" class='btn button btn-primary'>X</a></td>
                            <td><a href="{{route('alumnos.show',$alumno->id)}}" class='btn button btn-primary'>Ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$alumnos->links()}}
        </div>
        
    </div>
    @endsection

    <ul>
        @foreach ($deptos as $depto )
            <li>{{$depto->nombreDepto}}</li>
            <ul>
                @foreach ($depto->carreras as $carrera )
                <li>{{$carrera->nombreCarrera}}</li>
                <ul>
                    @foreach ($carrera->alumnos as $alumno)
                    <li>{{$alumno->nombre}}</li>
                    @endforeach
                </ul>
                    
                @endforeach
            </ul>
        @endforeach