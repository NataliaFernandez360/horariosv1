@extends("plantillas/plantilla2")
@section("contenido1")
@include("alumnos/tablahtml")
@endsection
@section("contenido2")
<h1>ver todos los datos</h1>
<form action="{{route('alumnos.destroy',$alumno)}}" method="POST">
  @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$alumno->nombre}}" disabled>
      </div>
    </div>
    
    <div class="row mb-3">
    <label for="apellidoPat" class="col-sm-4 col-form-label">apellido Paterno</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="apellidoPat" name="apellidoPat" value="{{$alumno->apellidoPat}}" disabled>
    </div>
  </div>
  
  <div class="row mb-3">
  <label for="email" class="col-sm-4 col-form-label">Email</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" id="email" name="email" value="{{$alumno->email}}" disabled>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Confirma la eliminación?</button>
    <a href="{{route('alumnos.index')}}" class="btn btn-primary">Regresar</a>
  </form>
  @endsection