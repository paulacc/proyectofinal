@extends('layaouts.app')
@section('content')

<div class="big-padding text-center blue-grey text-white">
   <h1>Productos</h1>
</div>

<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <td>Id</td>
        <td>Titulo</td>
        <td>Descripcion</td>
        <td>Precio</td>
        <td>Acciones</td>
      </tr>
    </thead>
  </table>
 <tbody>
   @foreach ($products as $product)
     <tr>
       <td>{{ $product->id}}</td>
       <td>{{ $product->title}}</td>
       <td>{{ $product->description}}</td>
       <td>{{ $product->pricing}}</td>
       <td>Acciones</td>



     </tr>
 </tbody>
</div>

@endsection('content')
