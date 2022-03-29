@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Categorias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary btn-md" href="{{route('admin.categories.create')}}">Crear Categoria</a>
        </div>
        <div class="card-body shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan=2></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td width=10px><a class="btn btn-primary btn-sm" href="{{route('admin.categories.edit', $category)}}">Editar</a></td>
                        <td width=10px>
                            <form action="{{route('admin.categories.destroy', $category)}}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>                                
                            </form>
                            
                    </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@stop

