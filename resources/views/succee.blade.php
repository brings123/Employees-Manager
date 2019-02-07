@extends('layouts.master')

@section('content')

<div class="container">
<div class="" style="height:120px;">

</div>
<h1>Créer un employée</h1>
<hr>
<div class="alert alert-success" role="alert">
Le compte a été créer avec succée!
</div>
<form class="" action="{{ url('create') }}" method="get">
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Retour</button>
  </div>
</form>
</div>
@endsection
