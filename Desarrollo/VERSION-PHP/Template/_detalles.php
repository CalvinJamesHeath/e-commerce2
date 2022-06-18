<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
if ($item['item_id'] == $item_id) :
?>
<section id="detalles">
           <div id="seccion">
               <div id="foto">
                <img src="<?php echo $item['item_image'] ?? "img/Nokia_5110.png"; ?>">
            </div>
            <div id="texto">
                <h1><?php echo $item['item_brand'] ?? "Unknown"; ?></h1>
                <h2>Año <?php echo $item['item_year'] ?? "Unknown"; ?></h2>
                <h3><?php echo $item['item_price'] ?? "Unknown"; ?>€</h3>
                <p><?php echo $item['item_description'] ?? "Unknown"; ?></p>
               
                <button><a href=""><p>COMPRAR</p></a></button>
            </div>
            </div>
            <div id="titulillo">
                <h2>CARACTERÍSTICAS TÉCNICAS</h2>
            </div>
            <div id="info">
                <h3><?php echo $item['item_brand'] ?? "Unknown"; ?></h3>
                <p>Teléfono móvil GSM 900 fabricado por Nokia.</p>
                <p>Año de lanzamiento: 1998</p>
                <h4>BATERÍA</h4>
                <p><?php echo $item['item_bateria'] ?? "Unknown"; ?></p>
                <p>Capacidad batería: 900 Amperios hora</p>
                <h4>DISEÑO</h4>
                <p>Centímetros cúbicos: 143cc</p>
                <p>Dimensiones: 47,5 x 132 x 31 mm</p>
                <p>Forma: compacto</p>
                <p>Peso: 170 gr</p>
                <h4>JUEGOS</h4>
                <p>Juegos incluidos: <?php echo $item['item_juegos'] ?? "Unknown"; ?></p>
                <h4>LLAMADAS Y VOZ</h4>
                <p>Utilidades: registros detallados de llamadas</p>
                <h4>MENSAJERÍA</h4>
                <p>Mensajería: SMS</p>
                <h4>PANTALLA</h4>
                <p>Otras características: tamaño de fuente dinámico</p>
                <p>Pantalla color: monocroma</p>
                <p>Resolución pantalla: 84 x 48 px</p>
                <h4>RED</h4>
                <p>Red GSM 900</p>
                <h4>TECLADO Y BOTONES</h4>
                <p>Teclas presentes: borrar, encendido/apagado, navegación, seleccionar, teclado numérico.</p>
                <p>Tipo de teclado: numérico</p>
            </div>
        </section>
        <?php
endif;
endforeach;
?>