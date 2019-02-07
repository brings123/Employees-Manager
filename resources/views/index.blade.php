@extends('layouts.master')

@section('content')

<div class="container">
<div class="" style="height:120px;">

</div>
<h1>Liste des employées</h1>
<hr>
<ul class="list-group">
<li class="list-group-item">
  <div class="row">
  <div class="col-md-3" style="font-weight:bold;">
  Nom
  </div>
    <div class="col-md-3" style="font-weight:bold;">
      Prénom
    </div>
    <div class="col-md-3" style="font-weight:bold;">
      Numéro de téléphone
    </div>
    <div class="col-md-3" style="font-weight:bold;">
Supprimer
    </div>
    </div>
</li>
@foreach ($employees as $employee)
  <li class="list-group-item">
    <div class="row">
    <div class="col-md-3">
    {{$employee->nom}}
    </div>
      <div class="col-md-3">
        {{$employee->prenom}}
      </div>
      <div class="col-md-3">
        {{$employee->numtel}}
      </div>
      <div class="col-md-3">
        <div class="row">
          <div class="col-md-8">
              <a class="btn btn-primary" href="{{url('edit/'.$employee->id)}}">Modifier</a>
          </div>
          <div class="col-md-8">
            <form class="" action="{{ url('delete/'.$employee->id) }}" method="post">
              {{csrf_field()}}
              {{csrf_field('DELETE')}}
              <button type="submit" class="btn btn-danger">X</button>
            </form>
          </div>
        </div>
      </div>
      </div>
</li>

@endforeach

</ul>
</div>
@endsection
