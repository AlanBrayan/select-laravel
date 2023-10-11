<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="form-group">
    <label for="">Empresa</label>
    <select class="form-control" name="select-empresa" id="select-empresa">
        @foreach ($empresas as $empresa)
            <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Empleados</label>
    <select class="form-control" name="select-empleado" id="select-empleado">
        <option></option>
    </select>
</div>



<script>
    // Esta función se ejecuta cuando el documento HTML está completamente cargado.
    $(function() {
        // Establece un evento de cambio en el elemento HTML con el ID "select-empresa".
        // Cuando el usuario selecciona una opción diferente, se llama a la función onSelectEmpresaChange.
        $('#select-empresa').on('change', onSelectEmpresaChange);
    });

    // Función que se ejecuta cuando se produce un cambio en el elemento "select-empresa".
    function onSelectEmpresaChange() {
        // Obtiene el valor (id) seleccionado en el elemento "select-empresa" y lo almacena en la variable empresa_id.
        var empresa_id = $(this).val();

        // Construye la URL completa de la solicitud en la API.
        var apiUrl = '/api/empresas/' + empresa_id + '/niveles';

        // Realiza una solicitud GET a la API y, cuando se completa, ejecuta una función de devolución de llamada.
        $.get(apiUrl, function(data) {
            // Inicializa una cadena HTML con una opción predeterminada que dice "Selecciona empleado".
            var html_select = '<option value="">Selecciona empleado</option>';

            // Itera sobre los datos recibidos en la respuesta de la solicitud GET.
            for (var i = 0; i < data.length; i++) {
                // Crea opciones HTML con el ID y nombre de cada empleado y las agrega a la cadena html_select.
                html_select += '<option value="' + data[i].id + '">' + data[i].nombre + '</option>';
            }

            // Actualiza el contenido del elemento "select-empleado" con las opciones generadas.
            $('#select-empleado').html(html_select);
        });
    }
</script>
