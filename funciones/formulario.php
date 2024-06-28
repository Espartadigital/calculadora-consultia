<div id="formulario-calculadora">
    <h3>¡Estás a un click de descubrirlo!</h3>
    	<hr>
    <div id="resultado-ahorro" style="display:none; margin-top: 20px;">
        <h4 class="box-ahorro">El ahorro* está entre: <span id="ahorro-valor"></span>€</h4>
        <br>
        <p>*Es un caso hipotético que da una idea de los ahorros estimados. Dependerá de la situación actual de la empresa y del grado de digitalización.</p>
        <p>Los ahorros de Destinux se estiman a partir de la eficiencia que se obtiene en los distintos procesos que se desarrollan en la gestión de los viajes corporativos y en la implicación que estos tienen en los resultados de la empresa tanto en productividad y bienestar como en la optimización de recursos.</p>
        <p>Explora cómo nuestra solución lleva la gestión de tus viajes corporativos a una nueva era y deja de perder dinero y tiempo.</p>
    </div>

	<form name="calculadora-esparta" id="calculadora-esparta" action=""  method ="post">
		<div id="nombre-correo">
			<label for="clienteNombre">
				Nombre completo
				<input name="clienteNombre" type="text" placeholder="Escribe tu nombre completo">
			</label>
			<label for="clienteCorreo">
				Correo profesional<span class="requerido">*</span>
				<input name="clienteCorreo" type="email" placeholder="Escribe tu correo profesional" required>
			</label>
		</div>
		<div id="datos-empresa">
			<label for="clienteViajeros">
				Número de viajeros aprox<span class="requerido">*</span>
				<input name="clienteViajeros" id="clienteViajeros" type="number" min="1" placeholder="Escrube el número de viajeros" required>
			</label>
			<label for="clienteGasto">
				Gasto anual en viajes<span class="requerido">*</span>
				<input name="clienteGasto" id="clienteGasto" type="number" placeholder="Escribe el gasto anual de viajes" required>
			</label>
		</div>
		<div id="final">
			<p>*Campos obligatorios</p>
			<input type="submit" value="Descubrir">
		</div>
	</form>
	
</div>

<script>
    document.getElementById("calculadora-esparta").addEventListener("submit", function (e) {
        e.preventDefault();

        var numeroViajeros = document.getElementById("clienteViajeros").value;
        var gastoViajes = document.getElementById("clienteGasto").value;

        var ahorroObtenido = gastoViajes * 0.1061107143 + numeroViajeros * 117 + 11550;

		const formularioAhorro = document.querySelector('#calculadora-esparta');
        const resultadoAhorro = document.querySelector('#resultado-ahorro');
        resultadoAhorro.querySelector('#ahorro-valor').innerText = ahorroObtenido.toFixed(2);

        console.log(numeroViajeros);
        console.log(gastoViajes);
        console.log(ahorroObtenido);

        resultadoAhorro.style.display = 'block';
		formularioAhorro.style.display = 'none';
    });
</script>
