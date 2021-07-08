@extends('layoults.master')
@section('contenido')

  <div class="row mt-5">
      <div class="col-12 col-md-8 col-lg-5 mx-auto" >
          <div class="card">
              <div class="card-header bg-warning">
                  <span>Agregar Consola</span>
              </div>
              <div class="card-body">
                  <div class="mb-3">
                      <label for="nombre-txt" class="form-label">Nombre</label>
                      <input type="text" id="nombre-txt" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="marca-select" class="form-label">Marca</label>
                      <select  id="marca-select" class="form-select">
                          
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="anio-txt" class="form-label">Año de Lansamiento</label>
                      <input type="number" class="form-control" id="anio-txt">
                  </div>
              </div>
              <div class="card-footer d-grid gap-1">
                  <button type="button" class="btn btn-primary">Registrar</button>
              </div>
          </div>
      </div>
  </div>

@endsection
@section('javascript')
    <script src="{{asset('js/registrar_consola.js')}}"></script>
    
@endsection






