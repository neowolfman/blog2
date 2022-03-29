@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Nueva Categoria</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.categories.store' ]) !!}
            <div class="from-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el Nombre de la Categoria']) !!}         
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>                
                @enderror       
            </div>
            <div class="from-group">
                {!! Form::label('slug', 'Nombre') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el Slug de la Categoria', 'readonly']) !!}                
                @error('slug')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror       

            </div>     
            <div class="from-group">
                {!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary shadow-sm']) !!}       
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"> </script>
    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
            });
        });
      </script>
@stop