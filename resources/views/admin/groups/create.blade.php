@extends('layouts.app')

@section('title','Crear grupo')

@section('content')

  <div class="well-medium">
    <h1 class="text-center">Grupos</h1>
  </div>


  <div class="panel panel-default" style="margin-left:10%;margin-right:10%;">
    <div class="panel-heading">
    <h3 class="panel-title">Añadir grupo</h3>
  </div>
    <div class="panel-body">

      {!! Form::open(['route'=>'groups.store','method'=>'POST'])!!}

      <div class="form-group">
        {!! Form::label('nivel_id','Niveles') !!}
        {!!Form::select('nivel_id',$levels,null,['class'=>'form-control','style'=>'width:30%;','placeholder'=>'Seleccionar niveles','required'])!!}
      </div>

      <div class="form-group">
        {!! Form::label('profesor_id','Teacher') !!}
        {!!Form::select('profesor_id',$teachers,null,['class'=>'form-control','style'=>'width:30%;','placeholder'=>'Seleccionar teacher','required'])!!}
      </div>

        <div class="form-group">
          {!! Form::label('aula','Aula') !!}
          {!!Form::text('aula',null,['class'=>'form-control','style'=>'width:30%;','placeholder'=>'Aula asignada','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('hora','Horario') !!}
          {!!Form::text('hora',null,['id'=>'timepicker','class'=>'form-control','style'=>'width:30%;','placeholder'=>'Hora asignada','required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('tipo_curso','Tipo de curso') !!}
          {!! Form::select('tipo_curso',['normal'=>'Normal','verano'=>'Verano'],null,['class'=>'form-control','style'=>'width:30%;','placeholder'=>'Seleccionar tipo de curso','required']) !!}
        </div>


        <div>
          {!! Form::submit('Crear',['class'=>'btn btn-primary']) !!}
        </div>

      {!! Form::close()!!}

    </div>
  </div>

@endsection
