@extends("plantillas/plantilla2")
@section("contenido1")
@include("alumnos2/tablahtml")
@endsection
@section("contenido2")
@if($accion=='C')
<form action="{{route('alumnos.store')}}" method="POST">
  <h1>Insertando</h1>
  @elseif ($accion=='E')
<form action="{{route('alumnos.update',$alumno->id)}}" method="POST">
  <h1>Editando</h1>
  @elseif ($accion=='D')
<form action="{{route('alumnos.destroy',$alumno->id)}}" method="POST">
  <h1>Eliminando</h1>
  @endif
  @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre', $alumno->nombre)}}" {{$des}}>
        @error("nombre")
          <p class="text-danger">Error en: {{$message}}</p>
        @enderror
      </div>
    </div>
    
    <div class="row mb-3">
    <label for="apellidoPat" class="col-sm-3 col-form-label">apellido Paterno</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="apellidoPat" name="apellidoPat" value="{{old('apellidoPat', $alumno->apellidoPat)}}" {{$des}}>
      @error("apellidoPat")
      <p class="text-danger">Error en: {{$message}}</p>
    @enderror
    </div>
  </div>
  
  <div class="row mb-3">
  <label for="email" class="col-sm-3 col-form-label">Email</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" id="email" name="email" value="{{old('email', $alumno->email)}}"{{$des}}>
        @error("email")
        <p class="text-danger">Error en: {{$message}}</p>
      @enderror
      </div>
    </div>

    <div class="row mb-3">
          <div class="col-sm-9">
            <button type="submit" class="btn btn-primary">{{$txtbutton}}</button>
          </div>
        </div>

  
  </form>
  @endsection