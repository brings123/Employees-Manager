@extends('layouts.master')

@section('content')
<div class="container">
<div class="" style="height:120px;">

</div>
<h1>Modifier l'employee {{$employee->prenom}}</h1>
<hr>
<form class="" action="{{ url('edit/'.$employee->id) }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
   <label for="exampleInputEmail1">Nom</label>
   <input type="text" class="form-control" name="nom" id="exampleInputEmail1" value="{{$employee->nom}}">
 </div>
 <div class="form-group">
    <label for="exampleInputEmail2">Prénom</label>
    <input type="text" class="form-control" name="prenom" id="exampleInputEmail2" value="{{$employee->prenom}}">
  </div>
  <div class="form-group">
     <label for="exampleInputEmail3">Numéro de téléphone</label>
     <input type="text" name="numTel" class="form-control" id="exampleInputEmail3"  value="{{$employee->numtel}}">
  </div>
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>
</div>
@endsection
