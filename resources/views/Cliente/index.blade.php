Mostrar la lista de clientes
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Numero Documento</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Fecha ultima Compra</th>
            <th>Numero Tarjeta Asociado</th>
            <th>Correo Electronico</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente )
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->Nombre}}</td>
            <td>{{$cliente->Primer_Apellido}}</td>
            <td>{{$cliente->Segundo_Apellido}}</td>
            <td>{{$cliente->Numero_Documento}}</td>
            <td>{{$cliente->Direccion}}</td>
            <td>{{$cliente->Telefono}}</td>
            <td>{{$cliente->Fecha_Ultima_Compra}}</td>
            <td>{{$cliente->Numero_Tarjeta_Asociado}}</td>
            <td>{{$cliente->Correo_Electronico}}</td>
            <td>{{$cliente->foto}}</td>
            <td>editar | borrar</td>
        </tr>
        @endforeach
    </tbody>
</table>
