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
                                <?php echo isset($Subtitle) ? $Subtitle : " Grupos de usuarios";?>

                            </h4>
                        </div>

                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">

                        <!-- <div class="datatable datatable-bordered datatable-head-custom" id=""> -->
                        <div class="container" style="">
                            <div class="table-responsive-xl">

                                <table id="example2" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Numero</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                    //print_r($lineas);
                                        foreach ($lineas as $a) { ?>
                                        <tr id="rowlinea<?= $a->id ?>">

                                            <td>
                                                <?= $a->id ?>
                                            </td>
                                            <td>
                                                <?= $a->name ?>
                                            </td>
                                            <td>
                                                <?= $a->description ?>
                                            </td>
                                            <td>
                                                <?php if ($a->deleted==1){
                                                    echo("inactivo");
                                                }
                                                else{
                                                    echo("activo"); 
                                                } ?>

                                            </td>
                                            <td>
                                                <button type="button" class=" editar btn btn-secondary  btn-sm"
                                                    style="cursor:pointer" data-toggle="modal" data-target="#editModal"
                                                    data-id="<?= $a->id ?>">editar</button>
                                                <button type="submit" class="activar btn btn-primary  btn-sm"
                                                    id="activarGrupoBtn" data-id="<?= $a->id ?>">Activar
                                                    Grupo</button>
                                                <button type="submit" class="borrar btn btn-danger  btn-sm"
                                                    id="borrarGrupoBtn" data-id="<?= $a->id ?>">Desactivar
                                                    Grupo</button>

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
                                                        <label for="editPorcentaje">Nombre</label>
                                                        <input type="text" class="form-control" id="editPorcentaje">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="editPorcentaje">Descripcion</label>
                                                        <input type="text" class="form-control" id="editDescripcion">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Cancelar</button>

                                                <button type="delete" class="btn btn-primary" id="saveChangesBtn"
                                                    data-id="<?= $a->id ?>">Guardar
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
        $("#editPorcentaje").val(data[1]);
        $("#editDescripcion").val(data[2]);

        console.log(data[0]);
        $("#editModal").modal("show");
        $('#editModal').on('show.bs.modal', function() {
            $('body').css('overflow', 'hidden');
        });

    });
    $("#saveChangesBtn").on("click", function() {
        var id = $("#editLineaAccion").val();
        var newPorcentaje = $("#editPorcentaje").val();
        var newDescripcion = $("#editDescripcion").val();


        console.log(id, newPorcentaje, newDescripcion);


        $.ajax({
            url: "<?= base_url() ?>Auth/guardarGrupo",
            type: "POST",
            data: {
                id: id,
                porcentaje: newPorcentaje,
                descriocion: newDescripcion,
            },
            success: function(response) {
                // Aquí puedes manejar la respuesta si es necesario
                console.log(response);

                //alert(alertMessage);
                // alert(
                //     "Datos editados:\nLínea de Acción: " +
                //     id +
                //     "\n Nuevo Porcentaje: " +
                //     newPorcentaje
                // );
                Swal.fire({
                    // position: "top-end",
                    icon: "success",
                    title: "Grupo Numero:  " + id + "\n Nueva Nombre:\n " +
                        newPorcentaje + "\n Nueva Descripcion:\n " + newDescripcion,
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
                    //  mostrar los nuevos valores en la tabla
                    table.cell(editingId - 1, 1).data(newPorcentaje);
                    table.cell(editingId - 1, 2).data(newDescripcion);

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
    $("#example2 tbody").on("click", ".borrar", function() {
        var id = $(this).data("id");
        $.ajax({
            url: "<?= base_url() ?>Auth/borrarGrupo",
            type: "POST",
            data: {
                id: id
            },
            success: function(response) {
                console.log(id);
                Swal.fire({
                    icon: "success",
                    title: "Grupo Numero: " + id + " \n ha sido desactivado",
                    showConfirmButton: false,
                    timer: 3000,
                    showClass: {
                        popup: `animate__animated animate__fadeInUp animate__faster`
                    },
                    hideClass: {
                        popup: `animate__animated animate__fadeOutDown animate__faster`
                    },
                    allowOutsideClick: false,
                });
                // table.row($("#rowlinea" + id)).remove().draw();
                table.rows().every(function(rowIdx, tableLoop, rowLoop) {
                    console.log(id);

                    var data = this.data();
                    // var id = $(this).data("id");
                    var newPorcentaje = "Inactivo";
                    // mostrar los nuevos valores en la tabla
                    table.cell(id - 1, 3).data(newPorcentaje);
                });
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
        });
    });

    $("#example2 tbody").on("click", ".activar", function() {
        var id = $(this).data("id");
        $.ajax({
            url: "<?= base_url() ?>Auth/activarGrupo",
            type: "POST",
            data: {
                id: id
            },
            success: function(response) {
                console.log(id);
                Swal.fire({
                    icon: "success",
                    title: "Grupo Numero: " + id + " \n ha sido Activado",
                    showConfirmButton: false,
                    timer: 3000,
                    showClass: {
                        popup: `animate__animated animate__fadeInUp animate__faster`
                    },
                    hideClass: {
                        popup: `animate__animated animate__fadeOutDown animate__faster`
                    },
                    allowOutsideClick: false,
                });
                // table.row($("#rowlinea" + id)).remove().draw();
                table.rows().every(function(rowIdx, tableLoop, rowLoop) {
                    console.log(id);

                    var data = this.data();
                    // var id = $(this).data("id");
                    var newPorcentaje = "Activo";
                    // mostrar los nuevos valores en la tabla
                    table.cell(id - 1, 3).data(newPorcentaje);
                });
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            },
        });
    });

});
</script>