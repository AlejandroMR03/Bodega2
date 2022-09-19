Mostrar la lista de clientes
<link rel="stylesheet" href="app.css">
<table class="index">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <thead class="table-dark">
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
            <td>
                <a href="{{ url('/cliente/'.$cliente->id.'/edit')}}">
                    <input type="submit" onclick="return confirm('¿Quieres Editar un Cliente??')" value="Editar">
                    @csrf
                    {{method_field('PATCH')}}
                </a>



            <form action="{{url('/cliente/'. $cliente->id) }}" method="post">

            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            @csrf
            {{method_field('DELETE')}}


        </form>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
