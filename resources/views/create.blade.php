@extends('layouts.master')

@section('content')
<div class="container">
<div class="" style="height:120px;">

</div>
<h1>Créer un employée</h1>
<hr>
<form class="" action="{{ url('store') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
   <label for="exampleInputEmail1">Nom</label>
   <input type="text" class="form-control" name="nom" id="exampleInputEmail1" placeholder="Entrer votre nom">
 </div>
 <div class="form-group">
    <label for="exampleInputEmail2">Prénom</label>
    <input type="text" class="form-control" name="prenom" id="exampleInputEmail2" placeholder="Entrer votre prénom">
  </div>
  <div class="form-group">
     <label for="exampleInputEmail3">Numéro de téléphone</label>
     <input type="text" name="numTel" class="form-control" id="exampleInputEmail3" placeholder="Entrer votre numéro de téléphone">
  </div>
  <button type="submit" class="btn btn-primary">Créer l'employee</button>
</form>
</div>
@endsection
