<!DOCTYPE html>
<html lang="en">

@section('htmlheader')
    @include('layout.partials.htmlheader')
@show

<body>

 <br>
 <br>

<!-- <div class="container text-center">
  <div class="jumbotron">
    <h1>Crear una aplicación crud sin recargar la pagina en laravel</h1>
  </div>
</div> -->

<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading">Presupuesto - Año: 2018</div>
    <div class="panel-body">
      <button id="btn_add" name="btn_add" class="btn btn-primary pull-right">Nuevo Producto</button>
      <table class="table">
        <thead>
          <tr><span>
            <th>ID</th>
            <th>Mes</th>
            <th>Presupuesto</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody id="productos-list" name="productos-list">
          @foreach ($productos as $producto)
          <tr id="producto{{$producto->id}}">
            <td>{{$producto->id}}</td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>
              <div class="btn-group">
                <button class="btn btn-warning btn-detail open_modal" value="{{$producto->id}}">
                  <!-- <i class="fa fa-align-left"></i> -->Editar
                </button>
                <button class="btn btn-danger btn-delete delete-producto" value="{{$producto->id}}">Eliminar</button>
              </div>                
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
   </div>
  </div>
  @section('windowmodal')
    @include('layout.partials.windowmodal')
  @show
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{asset('js/crud.js')}}"></script>
</body>
</html>