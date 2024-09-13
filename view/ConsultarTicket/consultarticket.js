var tabla;
var usu_id = $('#user_idx').val();
var rol_id = $('#rol_idx').val();

function init() {
    $("#ticket_form").on("submit", function (e) {
        guardar(e);
    });

    // Recargar la tabla cada 5 segundos
    setInterval(function() {
        recargarTabla();
    }, 5000); // 5000 milisegundos = 5 segundos
}

$(document).ready(function () {
    $.post("../../controller/usuario.php?op=combo", function (data) {
        $('#usu_asig').html(data);
    });

    if (rol_id == 1) {
        tabla = $('#ticket_data').DataTable({
            "aProcessing": true,
            "aServerSide": true,
            dom: 'Bfrtip',
            "searching": true,
            lengthChange: false,
            colReorder: true,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            "ajax": {
                url: '../../controller/ticket.php?op=listar_x_usu',
                type: "POST",
                dataType: "json",
                data: { usu_id: usu_id },
                error: function (e) {
                    console.log(e.responseText);
                }
            },
            "bDestroy": true,
            "responsive": true,
            "bInfo": true,
            "iDisplayLength": 10,
            "autoWidth": false,
            "language": { /* Configuración del lenguaje */ }
        });
    } else {
        tabla = $('#ticket_data').DataTable({
            "aProcessing": true,
            "aServerSide": true,
            dom: 'Bfrtip',
            "searching": true,
            lengthChange: false,
            colReorder: true,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ],
            "ajax": {
                url: '../../controller/ticket.php?op=listar',
                type: "POST",
                dataType: "json",
                error: function (e) {
                    console.log(e.responseText);
                }
            },
            "bDestroy": true,
            "responsive": true,
            "bInfo": true,
            "iDisplayLength": 10,
            "autoWidth": false,
            "language": { /* Configuración del lenguaje */ }
        });
    }
});

// Función para recargar la tabla
function recargarTabla() {
    $('#ticket_data').DataTable().ajax.reload(null, false);  // Recargar tabla sin reiniciar la página
}

// Función de guardar
function guardar(e) {
    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);
    $.ajax({
        url: "../../controller/ticket.php?op=asignar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {
            $("#modalasignar").modal('hide');  // Cerrar modal
            recargarTabla();  // Recargar la tabla inmediatamente después de guardar
        }
    });
}

init();
