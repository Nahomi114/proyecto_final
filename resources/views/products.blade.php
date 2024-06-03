@extends('layouts.app')

@section('title', 'Inicio')

<body>
	<!-- Notification area -->
	<section class="full-width container-notifications">
		@include('partials.notifications')    
	</section>
	<!-- Side navigation -->
	@include('partials.navLateral')
	<!-- Page content -->
	<section class="full-width pageContent">
		<!-- Navigation bar -->
		@include('partials.navBar')

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="#tabNewProduct" class="mdl-tabs__tab is-active">NUEVO</a>
        <a href="#tabListProducts" class="mdl-tabs__tab">LISTA</a>
    </div>
    <div class="mdl-tabs__panel  is-active" id="tabNewProduct">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <div class="full-width panel mdl-shadow--2dp">
                    <div class="full-width panel-tittle bg-primary text-center tittles">
                        Nuevo Producto
                    </div>
                    <div class="full-width panel-content">
                        <form>
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; INFORMACIÓN BÁSICA</legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="number" pattern="-?[0-9- ]*(\.[0-9]+)?" id="BarCode">
                                        <label class="mdl-textfield__label" for="BarCode">Código de barras</label>
                                        <span class="mdl-textfield__error">Código de barras inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameProduct">
                                        <label class="mdl-textfield__label" for="NameProduct">Nombre</label>
                                        <span class="mdl-textfield__error">Nombre inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="StrockProduct">
                                        <label class="mdl-textfield__label" for="StrockProduct">Unidades</label>
                                        <span class="mdl-textfield__error">Número inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?" id="PriceProduct">
                                        <label class="mdl-textfield__label" for="PriceProduct">Precio</label>
                                        <span class="mdl-textfield__error">Precio inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="discountProduct">
                                        <label class="mdl-textfield__label" for="discountProduct">% Descuento</label>
                                        <span class="mdl-textfield__error">Descuento inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; CATEGORÍA</legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <select class="mdl-textfield__input">
                                            <option value="" disabled="" selected="">Seleccionar categoría</option>
                                            <option value="">Categoría 1</option>
                                            <option value="">Categoría 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS DEL PROVEEDOR Y MODELO</legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <select class="mdl-textfield__input">
                                            <option value="" disabled="" selected="">Seleccionar proveedor</option>
                                            <option value="">Proveedor 1</option>
                                            <option value="">Proveedor 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="modelProduct">
                                        <label class="mdl-textfield__label" for="modelProduct">Modelo</label>
                                        <span class="mdl-textfield__error">Modelo inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="markProduct">
                                        <label class="mdl-textfield__label" for="markProduct">Marca</label>
                                        <span class="mdl-textfield__error">Marca inválida</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; OTROS DATOS</legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <input type="date" class="mdl-textfield__input">
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <select class="mdl-textfield__input">
                                            <option value="" disabled="" selected="">Seleccionar estado</option>
                                            <option value="">Activo</option>
                                            <option value="">Desactivado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <input type="file">
                                    </div>
                                </div>
                            </div>
                            <p class="text-center">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct">
                                    <i class="zmdi zmdi-plus"></i>
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</section>
</body>
</html>
