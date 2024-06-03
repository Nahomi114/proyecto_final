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
        
<div class="full-width divider-menu-h"></div>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
        <div class="table-responsive">
            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp full-width table-responsive">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">Fecha</th>
                        <th>Cliente</th>
                        <th>Pago</th>
                        <th>Total</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">11/04/2016</td>
                        <td>Nombre del cliente</td>
                        <td>Crédito</td>
                        <td>$77</td>
                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                    </tr>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">11/04/2016</td>
                        <td>Nombre del cliente</td>
                        <td>Crédito</td>
                        <td>$77</td>
                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                    </tr>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">11/04/2016</td>
                        <td>Nombre del cliente</td>
                        <td>Crédito</td>
                        <td>$77</td>
                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                    </tr>
                    <tr>
                        <td class="mdl-data-table__cell--non-numeric">11/04/2016</td>
                        <td>Nombre del cliente</td>
                        <td>Crédito</td>
                        <td>$77</td>
                        <td><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="zmdi zmdi-more"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
</body>
</html>
