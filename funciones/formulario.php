
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
    <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
    <script>
        hbspt.forms.create({
            region: "eu1",
            portalId: "25846740",
            formId: "a5e92d3a-0bf4-4e29-b6d3-b12a634abd96",
            onFormReady: function($form){
                $form.find('.hs-form__virality-link').hide();
                $form.find('.actions').css({
                    'display': 'flex',
                    'justify-content': 'end',
                    'margin-right': '15px'
                });
                $form.find('.hs-button').css({
                    'background-color': '#8E27CC',
                    'border-radius': '10px',
                    'border': '1px solid #8E27CC',
                    'color': '#fff'
                });
            },
            onFormSubmitted: function($form) {
                $form.hide();
                var iframeDoc = document.querySelector("#hs-form-iframe-0").contentDocument;
                var viajeros2 = parseFloat(iframeDoc.querySelector("#numero_de_viajeros_aprox_-a5e92d3a-0bf4-4e29-b6d3-b12a634abd96").value);
                var gasto2 = parseFloat(iframeDoc.querySelector("#gasto_anual_en_viajes-a5e92d3a-0bf4-4e29-b6d3-b12a634abd96").value);
                var ahorro2 = gasto2 * 0.1061107143 + viajeros2 * 117 + 11550;
                document.getElementById('ahorro-valor').textContent = ahorro2.toFixed(2);
                document.getElementById('resultado-ahorro').style.display = 'block';
            }
        });
    </script>
</div>