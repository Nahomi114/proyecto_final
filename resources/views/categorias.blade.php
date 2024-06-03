@extends('common')

@section('title', 'Categories')

@section('content')
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewCategory" class="mdl-tabs__tab is-active">NEW</a>
            <a href="#tabListCategory" class="mdl-tabs__tab">LIST</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewCategory">
            <!-- Contenido del formulario para crear una nueva categoría -->
        </div>
        <div class="mdl-tabs__panel" id="tabListCategory">
            <!-- Contenido de la lista de categorías -->
        </div>
    </div>
@endsection