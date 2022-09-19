<form action="{{ url('/cliente/'.$cliente->id)}}" method="post" enctype="multipart/form-data">
@csrf

{{method_field('PATCH')}}
@include('Cliente.form');



</form>
