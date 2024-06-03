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
        <a href="#tabNewProvider" class="mdl-tabs__tab is-active">NUEVO</a>
        <a href="#tabListProvider" class="mdl-tabs__tab">LISTA</a>
    </div>
    <div class="mdl-tabs__panel is-active" id="tabNewProvider">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <div class="full-width panel mdl-shadow--2dp">
                    <div class="full-width panel-tittle bg-primary text-center tittles">
                        Nuevo Proveedor
                    </div>
                    <div class="full-width panel-content">
                        <form>
                            <div class="mdl-grid">
                                <div class="mdl-cell mdl-cell--12-col">
                                    <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS DEL PROVEEDOR</legend><br>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNIProvider">
                                        <label class="mdl-textfield__label" for="DNIProvider">DNI</label>
                                        <span class="mdl-textfield__error">Número inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9 ]*(\.[0-9]+)?" id="NameProvider">
                                        <label class="mdl-textfield__label" for="NameProvider">Nombre</label>
                                        <span class="mdl-textfield__error">Nombre inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--12-col">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="addressProvider">
                                        <label class="mdl-textfield__label" for="addressProvider">Dirección</label>
                                        <span class="mdl-textfield__error">Dirección inválida</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneProvider">
                                        <label class="mdl-textfield__label" for="phoneProvider">Teléfono</label>
                                        <span class="mdl-textfield__error">Número de teléfono inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="email" id="emailProvider">
                                        <label class="mdl-textfield__label" for="emailProvider">Correo electrónico</label>
                                        <span class="mdl-textfield__error">Correo electrónico inválido</span>
                                    </div>
                                </div>
                                <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="webProvider">
                                        <label class="mdl-textfield__label" for="webProvider">Web</label>
                                        <span class="mdl-textfield__error">Dirección web inválida</span>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center">
                                <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProvider">
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
</div>
</section>
</body>
</html>