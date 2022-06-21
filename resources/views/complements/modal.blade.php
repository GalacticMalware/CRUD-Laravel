<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> <label name="id" id="recipient-id"></label></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form method="POST" id="form" action="">
                    @csrf
                    <div class="container-fluid">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" name="NAME" class="form-control" id="recipient-name">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Apellido Paterno:</label>
                                <input type="text" name="LAST_NAME" class="form-control" id="recipient-last">
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Apellido Materno:</label>
                                <input type="text" name="LAST_NAME2" class="form-control" id="recipient-last2">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>