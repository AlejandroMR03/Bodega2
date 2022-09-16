Formulario de creacion de empleados
 <form action="{{url('/cliente')}}" method="post" enctype="multipart/form-data">
@csrf
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre">
<br>
<label for="Primer Apellido">Primer Apellido</label>
<input type="text" name="Primer Apellido" id="Primer Apellido">
<br>
<label for="Segundo Apellido">Segundo Apellido</label>
<input type="text" name="Segundo Apellido" id="Segundo Apellido">
<br>
<label for="Numero Documento">Numero Documento</label>
<input type="text" name="Numero Documento" id="Numero Documento">
<br>
<label for="Direccion">Direccion</label>
<input type="text" name="Direccion" id="Direccion">
<br>
<label for="Telefono">Telefono</label>
<input type="text" name="Telefono" id="Telefono">
<br>
<label for="fecha ultima compra">Fecha ultima compra</label>
<input type="date" name="fecha ultima compra" id="fecha ultima compra">
<br>
<label for="numero tarjeta asociado">numero tarjeta asociado</label>
<input type="text" name="numero de tarjeta asociado" id="numero de tarjeta asociado">
<br>
<label for="correo electronico">correo electronico</label>
<input type="text" name="correo electronico" id="correo electronico">
<br>
<label for="foto">foto</label>
<input type="file" name="foto" id="foto">
<br>
<br>
<input type="submit" value="Crear Cliente">




 </form>
