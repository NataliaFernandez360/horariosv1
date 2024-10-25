@extends("plantillas/plantilla2")
@section("contenido1")
@include("puestos/tablahtml")
@endsection
@section("contenido2")
<h1>ver todos los datos</h1>
<form action="{{route('puestos.destroy',$puesto)}}" method="POST">
  @csrf
  <div class="row mb-3">
    <label for="idPuesto" class="col-sm-3 col-form-label">ID del Puesto:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="idPuesto" name="idPuesto" value="{{$puesto->idPuesto}}">
    </div>
  </div>

    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre del Puesto:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$puesto->nombre}}">
      </div>
    </div>
    
    <div class="row mb-3">
    <label for="tipo" class="col-sm-3 col-form-label">Tipo:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="tipo" name="tipo" value="{{$puesto->tipo}}">
    </div>
  </div>
  

    <button type="submit" class="btn btn-primary">Confirma la eliminación?</button>
    <a href="{{route('puestos.index')}}" class="btn btn-primary">Regresar</a>
  </form>
  @endsection