			//<!--Elaborado por: Dennis Hernández Vargas, Creación: 4/7/2012 7:00p.m. Ultima modificación: 15/7/2012 11:41 p.m.-->
function activarValidaciones() {
	var txtNombre = new LiveValidation('txtNombre');
	txtNombre.add(Validate.Presence);
		var txtApellidos = new LiveValidation('txtApellidos');
				txtApellidos.add(Validate.Presence);
						var txtComent = new LiveValidation('txtComent');
							txtComent.add(Validate.Presence);
								var txtCorreo = new LiveValidation('txtCorreo');
										txtCorreo.add( Validate.Presence );
	                            		txtCorreo.add(Validate.Email);
}
