$.ajax({
	url: "ajax/plantilla.ajax.php",
	success: function (respuesta) {

        var colorFondo = JSON.parse(respuesta).colorFondo;
		var colorTexto = JSON.parse(respuesta).colorTexto;
		var barTop = JSON.parse(respuesta).barTop;
		var textoSuperior = JSON.parse(respuesta).textoSuperior;

		$(".back_color, .back_color a").css({
			"background": colorFondo,
			"color": colorTexto})

		$(".bar_top, .bar_top a").css({
			"background": barTop,
			"color": textoSuperior})
	},
});
