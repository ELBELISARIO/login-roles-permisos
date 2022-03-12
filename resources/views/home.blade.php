{{-- Así se comenta en un archivo blade.php --}}
{{-- Extendiendo de la vista layouts --}}
{{-- layouts->nombre de la carpeta --}}
{{-- app->nombre del archivo --}}
@extends('layouts.app')

{{-- Agregando título a la página --}}
@section('title', 'Home')

{{-- Agregando la sección de contenido para HTML propios --}}
@section('content')
    <h1 class="text-5xl text-center pt-24">Welcome to my application</h1>
    {{-- Finalizando la sección --}}
@endsection
