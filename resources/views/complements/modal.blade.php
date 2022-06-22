<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> <label name="id" id="recipient-id"></label></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form method="POST" class="needs-validation" novalidate id="form" action="">
                    @csrf
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <p>En ningún campo no puedes exceder más de 100 caracteres:</p>
                    </div>
                    @endif
                    <div class="container-fluid">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input required type="text" name="NAME" class="form-control" id="recipient-name">
                            <div class="invalid-feedback">
                                Por favor ingrese un nombre.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Apellido Paterno:</label>
                                <input required type="text" name="LAST_NAME" class="form-control" id="recipient-last">
                                <div class="invalid-feedback">
                                    Por favor ingrese un apellido paterno.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="recipient-name" class="col-form-label">Apellido Materno:</label>
                                <input required type="text" name="LAST_NAME2" class="form-control" id="recipient-last2">
                                <div class="invalid-feedback">
                                    Por favor ingrese un apellido materno.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" id="save">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                            $('#save').prop('disabled', true);
                        }
                        $('#save').prop('disabled', false);
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>