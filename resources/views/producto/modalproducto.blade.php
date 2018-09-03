@section('main-content')
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Producto</h4>
      </div>
      <div class="modal-body">
        <form id="frmproductos" name="frmproductos" class="form-horizontal" novalidate="">
          <div class="form-group error">
            <label for="inputName" class="col-sm-3 control-label">Nombre</label>
              <div class="col-sm-9">
                <input type="text" class="form-control has-error" id="nombre" name="nombre" placeholder="Product Name" value="">
              </div>
          </div>
          <div class="form-group">
            <label for="inputDetail" class="col-sm-3 control-label">Descripcion</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="details" value="">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn-save" value="add">Guardar</button>
        <input type="hidden" id="producto_id" name="producto_id" value="0">
      </div>
    </div>
  </div>
</div>
@endsection