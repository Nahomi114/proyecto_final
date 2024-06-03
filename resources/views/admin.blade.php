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
				<a href="#tabNewAdmin" class="mdl-tabs__tab is-active">NUEVO</a>
				<a href="#tabListAdmin" class="mdl-tabs__tab">LISTA</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabNewAdmin">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--12-col">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Nuevo Administrador
							</div>
							<div class="full-width panel-content">
								<form>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DATOS DEL ADMINISTRADOR</legend><br>
									    </div>
									    <div class="mdl-cell mdl-cell--12-col">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="DNIAdmin">
												<label class="mdl-textfield__label" for="DNIAdmin">DNI</label>
												<span class="mdl-textfield__error">Número inválido</span>
											</div>
									    </div>
									    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameAdmin">
												<label class="mdl-textfield__label" for="NameAdmin">Nombre</label>
												<span class="mdl-textfield__error">Nombre inválido</span>
											</div>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-záéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="LastNameAdmin">
												<label class="mdl-textfield__label" for="LastNameAdmin">Apellido</label>
												<span class="mdl-textfield__error">Apellido inválido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="tel" pattern="-?[0-9+()- ]*(\.[0-9]+)?" id="phoneAdmin">
												<label class="mdl-textfield__label" for="phoneAdmin">Teléfono</label>
												<span class="mdl-textfield__error">Número de teléfono inválido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="email" id="emailAdmin">
												<label class="mdl-textfield__label" for="emailAdmin">Correo electrónico</label>
												<span class="mdl-textfield__error">Correo electrónico inválido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="addressAdmin">
												<label class="mdl-textfield__label" for="addressAdmin">Dirección</label>
												<span class="mdl-textfield__error">Dirección inválida</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; DETALLES DE LA CUENTA</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ]*(\.[0-9]+)?" id="UserNameAdmin">
												<label class="mdl-textfield__label" for="UserNameAdmin">Nombre de usuario</label>
												<span class="mdl-textfield__error">Nombre de usuario inválido</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="password" id="passwordAdmin">
												<label class="mdl-textfield__label" for="passwordAdmin">Contraseña</label>
												<span class="mdl-textfield__error">Contraseña inválida</span>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--12-col">
									        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; ELIGE UN AVATAR</legend><br>
									    </div>
										<div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
											<div class="mdl-grid">
												<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
														<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="avatar-male.png">
														<img src="assets/img/avatar-male.png" alt="avatar" style="height: 45px; width="45px;" ">
														<span class="mdl-radio__label">Avatar 1</span>
													</label>
											    </div>
											    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
														<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="avatar-female.png">
														<img src="assets/img/avatar-female.png" alt="avatar" style="height: 45px; width="45px;" ">
														<span class="mdl-radio__label">Avatar 2</span>
													</label>
											    </div>
											    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
														<input type="radio" id="option-3" class="mdl-radio__button" name="options" value="avatar-male2.png">
														<img src="assets/img/avatar-male2.png" alt="avatar" style="height: 45px; width="45px;" ">
														<span class="mdl-radio__label">Avatar 3</span>
													</label>
											    </div>
											    <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
													<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
														<input type="radio" id="option-4" class="mdl-radio__button" name="options" value="avatar-female2.png">
														<img src="assets/img/avatar-female2.png" alt="avatar" style="height: 45px; width="45px;" ">
														<span class="mdl-radio__label">Avatar 4</span>
													</label>
											    </div>
											</div>
										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addAdmin">
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-addAdmin"></div>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
</body>
</html>