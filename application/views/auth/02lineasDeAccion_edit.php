<?php include('00topbar.php'); ?>

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    <?php echo isset($title) ? $title : "Modificacion de Lineas de Accion";?>
                </h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
                </div>
                <!--end::Separator-->
                <!--begin::Search Form-->

                <!--end::Search Form-->

            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card-deck">
                <div class="card border-light  ">
                    <!--begin::Header-->
                    <div class="card-header flex-wrap border-0 pt-6 pb-0">
                        <div class="card-title">
                            <h4 class="card-label">
                                <?php echo isset($Subtitle) ? $Subtitle : " Lineas de Accion";?>

                            </h4>
                        </div>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">

                        <!-- <div class="datatable datatable-bordered datatable-head-custom" id=""> -->
                        <div class="container" style="">
                            <div class="table-responsive-xl">

                                <table id="example2" class="table-responsive table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>linea de Accion</th>
                                            <th>Descripcion</th>
                                            <th>Evidencias</th>
                                            <th>Porcentaje </th>
                                            <th> Progreso</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                    //print_r($lineas);
                                    foreach ($lineas as $a) { ?>
                                        <tr id="rowlinea<?= $a->id ?>">
                                            <td>
                                                <?= $a->numero ?>
                                            </td>
                                            <td>
                                                <?= $a->descripcion ?>
                                            </td>
                                            <td class="url-cell">
                                                <?= $a->url ?>
                                            </td>
                                            <td>
                                                <?= $a->porcentaje ?>
                                            </td>
                                            <td>
                                                <progress id="file" max="100" value="<?= $a->porcentaje ?>"></progress>

                                            </td>
                                            <td>
                                                <button type="button" class=" url btn btn-secondary  btn-sm"
                                                    style="cursor:pointer" data-toggle="modal"
                                                    data-target="#editModalUrl" data-id="<?= $a->id ?>">Editar
                                                    Evidencia</button>

                                                <button type="button" class=" editar btn btn-danger  btn-sm"
                                                    style="cursor:pointer; margin-top: .5rem;" data-toggle="modal"
                                                    data-target="#editModal" data-id="<?= $a->id ?>">Editar
                                                    Porcentaje</button>

                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background: white">
                                                <h5 class="modal-title" id="editModalLabel">Editar Línea de
                                                    Acción</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editForm">
                                                    <div class="form-group">
                                                        <label for="editLineaAccion">Línea de Acción</label>
                                                        <input type="text" class="form-control" id="editLineaAccion"
                                                            readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editPorcentaje">Nuevo Porcentaje</label>
                                                        <input type="number" class="form-control" id="editPorcentaje"
                                                            min="0" max="100">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancelar</button>

                                                <button type="submit" class="btn btn-primary"
                                                    id="saveChangesBtn">Guardar
                                                    Cambios</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="editModalUrl" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header" style="background: white">
                                                <h5 class="modal-title" id="editModalLabel">editar evidencia</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="editForm">
                                                    <div class="form-group">
                                                        <label for="editLineaAccion2">Línea de Acción</label>
                                                        <input type="text" class="form-control" id="editLineaAccion2"
                                                            readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editUrl">Evidencia:</label>
                                                        <input type="text" class="form-control" id="editUrl">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-danger"
                                                    id="borrarUrl">Borrar</button>
                                                <button type="submit" class="btn btn-primary"
                                                    id="saveChangesBtnUrl">Guardar
                                                    Cambios</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!--end: Datatable-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<?php include('01footer.php'); ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.0.6/js/dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script>
var editingId;
$(document).ready(function() {
    let table = $("#example2").DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json",
        },
    });
    $("#example2 tbody").on("click", ".editar", function() {
        editingId = $(this).data("id");
        var id = $(this).data("id"); // Obtener el ID de la fila

        var data = table.row($(this).parents("tr")).data();
        $("#editLineaAccion").val(data[0]);
        $("#editPorcentaje").val(data[3]);
        console.log(data[0]);
        $("#editModal").modal("show");
        $('#editModal').on('show.bs.modal', function() {
            $('body').css('overflow', 'hidden');
        });

    });
    $("#saveChangesBtn").on("click", function() {
        var id = $("#editLineaAccion").val();
        var newPorcentaje = $("#editPorcentaje").val();

        console.log(id, newPorcentaje, editingId);

        if (newPorcentaje < 0 || newPorcentaje > 100) {
            alert(
                'El porcentaje introducido debe estar entre 0 y 100, de no ser asi NO es VALIDO ');
            return;
        } else {
            $.ajax({
                url: "<?= base_url() ?>Auth/guardarPorcentaje",
                type: "POST",
                data: {
                    id: id,
                    porcentaje: newPorcentaje,
                },
                success: function(response) {
                    // Aquí puedes manejar la respuesta si es necesario
                    console.log(response);

                    //alert(alertMessage);

                    Swal.fire({
                        // position: "top-end",
                        icon: "success",
                        title: "Datos editados \nLínea de Acción: " +
                            id +
                            "\n Nuevo Porcentaje: " +
                            newPorcentaje,
                        showConfirmButton: false,
                        timer: 3000,
                        showClass: {
                            popup: `animate__animated animate__fadeInUp animate__faster`,
                        },
                        hideClass: {
                            popup: `animate__animated animate__fadeOutDown animate__faster`,
                        },
                        allowOutsideClick: false,

                    });

                    table.rows().every(function(rowIdx, tableLoop, rowLoop) {
                        var data = this.data();
                        var id = $("#editLineaAccion").val();
                        var newPorcentaje = $("#editPorcentaje").val();
                        // mostrar los nuevos valores en la tabla
                        table.cell(editingId - 1, 3).data(newPorcentaje);
                    });
                    $('#editModal').on('hidden.bs.modal', function() {
                        $('body').css('overflow', 'auto');
                    });

                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                },
            });
            //$('#editModal').modal('hide');
            // $('body').removeClass('modal-open');
            // $('.modal-backdrop').remove();
            // $('#myModal').modal('handleUpdate')

        };


    });

    $("#example2 tbody").on("click", ".url", function() {
        editingId = $(this).data("id");
        var id = $(this).data("id"); // Obtener el ID de la fila

        var data = table.row($(this).parents("tr")).data();
        $("#editLineaAccion2").val(data[0]);
        $("#editUrl").val(data[2]);
        console.log(data[0], id);
        $("#editModalUrl").modal("show");
        $('#editModalUrl').on('show.bs.modal', function() {
            $('body').css('overflow', 'hidden');
        });

    });

    function isValidURL(url) {
        var pattern = new RegExp('^(https?:\\/\\/)?' + // protocolo
            '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|' + // dominio
            '((\\d{1,3}\\.){3}\\d{1,3}))' + // IP (v4) dirección
            '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*' + // puerto y ruta
            '(\\?[;&a-z\\d%_.~+=-]*)?' + // cadena de consulta
            '(\\#[-a-z\\d_]*)?$', 'i'); // fragmento ancla
        return !!pattern.test(url);
    }
    $("#saveChangesBtnUrl").on("click", function() {
        var id = $("#editLineaAccion2").val();
        var newPorcentaje = $("#editUrl").val();

        // Validar la URL
        if (!isValidURL(newPorcentaje)) {
            Swal.fire({
                icon: "error",
                title: "URL inválida",
                text: "Por favor, ingresa una URL válida.",
                showConfirmButton: true
            });
            return; // Detener la ejecución si la URL no es válida
        } else {
            console.log(id, newPorcentaje, editingId);


            $.ajax({
                url: "<?= base_url() ?>Auth/guardarUrl",
                type: "POST",
                data: {
                    id: id,
                    porcentaje: newPorcentaje,
                },
                success: function(response) {
                    // Aquí puedes manejar la respuesta si es necesario
                    console.log(response);

                    //alert(alertMessage);

                    Swal.fire({
                        // position: "top-end",
                        icon: "success",
                        title: "Datos editados ",
                        html: "<div style='word-break: break-all;'>Línea de Acción: " +
                            id + "<br> Nueva URL: " + newPorcentaje + "</div>",

                        showConfirmButton: false,
                        timer: 3000,
                        showClass: {
                            popup: `animate__animated animate__fadeInUp animate__faster`,
                        },
                        hideClass: {
                            popup: `animate__animated animate__fadeOutDown animate__faster`,
                        },
                        allowOutsideClick: false,

                    });

                    table.rows().every(function(rowIdx, tableLoop, rowLoop) {
                        var data = this.data();
                        var id = $("#editLineaAccion2").val();
                        var newPorcentaje = $("#editUrl").val();
                        // mostrar los nuevos valores en la tabla
                        table.cell(editingId - 1, 2).data(newPorcentaje);
                    });
                    $('#editModal').on('hidden.bs.modal', function() {
                        $('body').css('overflow', 'auto');
                    });

                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                },
            });
            //$('#editModal').modal('hide');
            // $('body').removeClass('modal-open');
            // $('.modal-backdrop').remove();
            // $('#myModal').modal('handleUpdate')




        };




    });
    $("#borrarUrl").on("click", function() {
        var id = $("#editLineaAccion2").val();
        var newPorcentaje = " ";

        // Validar la URL

        console.log(id, newPorcentaje, editingId);


        $.ajax({
            url: "<?= base_url() ?>Auth/borrarURL",
            type: "POST",
            data: {
                id: id,
                porcentaje: newPorcentaje,
            },
            success: function(response) {
                // Aquí puedes manejar la respuesta si es necesario
                console.log(response);

                //alert(alertMessage);

                Swal.fire({
                    // position: "top-end",
                    icon: "warning",
                    title: "Datos editados \n Se borro el url",

                    showConfirmButton: false,
                    timer: 3000,
                    showClass: {
                        popup: `animate__animated animate__fadeInUp animate__faster`,
                    },
                    hideClass: {
                        popup: `animate__animated animate__fadeOutDown animate__faster`,
                    },
                    allowOutsideClick: false,

                });

                table.rows().every(function(rowIdx, tableLoop, rowLoop) {
                    var data = this.data();
                    var id = $("#editLineaAccion2").val();
                    var newPorcentaje = "";
                    // mostrar los nuevos valores en la tabla
                    table.cell(editingId - 1, 2).data(newPorcentaje);
                });
                $('#editModal').on('hidden.bs.modal', function() {
                    $('body').css('overflow', 'auto');
                });

            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
        });
        //$('#editModal').modal('hide');
        // $('body').removeClass('modal-open');
        // $('.modal-backdrop').remove();
        // $('#myModal').modal('handleUpdate')








    });


});
</script>