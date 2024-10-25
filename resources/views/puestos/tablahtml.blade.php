

@section('contenido1')
   {{-- @dd($puestos)  monitorear cual es el contenido de una variable --}}
    <ul>
        {{-- @foreach ($puestos as $puesto )
            <li>{{$puesto->nombre}}</li>
        @endforeach --}}
    </ul>
    {{-- bs5- nos da opciones de objetos --}}

    <div>
        <a href="{{route('puestos.create')}}" class='btn button btn-primary'>Nuevo</a>
        <div
            class="table-primary"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID Puesto:</th>
                        <th scope="col">Nombre del Puesto:</th>
                        <th scope="col">Tipo:</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($puestos as $puesto )
                        <tr class="">
                            <td scope="row">{{$puesto->id}}</td>
                            <td>{{$puesto->idPuesto}}</td>
                            <td>{{$puesto->nombre}}</td>
                            <td>{{$puesto->tipo}}</td>
                            <td><a href="{{route('puestos.edit', $puesto->id)}}" class='btn button btn-primary'>EDITAR</a></td>
                            <td><a href="{{route('puestos.show',$puesto->id)}}" class='btn button btn-primary'>X</a></td>
                            <td><a href="{{route('puestos.show',$puesto->id)}}" class='btn button btn-primary'>Ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$puestos->links()}}
        </div>
        
    </div>

    @endsection