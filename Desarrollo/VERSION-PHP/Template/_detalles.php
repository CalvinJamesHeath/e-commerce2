<?php 
$item_id = $_GET['item_id'] ?? 1;
if($item_id <= 6): foreach ($product->getData() as $item) :
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
                <button><a href=""><p>COMPRAR</p></a></button>
            </div>
            </div>
            <div id="titulillo">
                <h2>CARACTERÍSTICAS TÉCNICAS</h2>
            </div>
            <div id="info">
                <h3><?php echo $item['item_brand'] ?? "Unknown"; ?> es estupendo para el uso diario ya que esta fabricado con componentes premium.</h3>
            </div>
        </section>
        <?php
endif;
endforeach;
?>
<?php elseif($item_id >= 7 && $item_id <= 12): foreach ($televisores->getData() as $item) :
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
                <button><a href=""><p>COMPRAR</p></a></button>
            </div>
            </div>
            <div id="titulillo">
                <h2>CARACTERÍSTICAS TÉCNICAS</h2>
            </div>
            <div id="info">
                <h3><?php echo $item['item_brand'] ?? "Unknown"; ?> es estupendo para el uso diario ya que esta fabricado con componentes premium.</h3>
            </div>
        </section>
        <?php
endif;
endforeach;
?>
<?php elseif($item_id >= 13 && $item_id <= 18): foreach ($videoconsolas->getData() as $item) :
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
                <button><a href=""><p>COMPRAR</p></a></button>
            </div>
            </div>
            <div id="titulillo">
                <h2>CARACTERÍSTICAS TÉCNICAS</h2>
            </div>
            <div id="info">
                <h3><?php echo $item['item_brand'] ?? "Unknown"; ?> es estupendo para el uso diario ya que esta fabricado con componentes premium.</h3>
            </div>
        </section>
        <?php
endif;
endforeach;
?>
<?php elseif($item_id >= 19 && $item_id <= 24): foreach ($camaras->getData() as $item) :
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
                <button><a href=""><p>COMPRAR</p></a></button>
            </div>
            </div>
            <div id="titulillo">
                <h2>CARACTERÍSTICAS TÉCNICAS</h2>
            </div>
            <div id="info">
                <h3><?php echo $item['item_brand'] ?? "Unknown"; ?> es estupendo para el uso diario ya que esta fabricado con componentes premium.</h3>
            </div>
        </section>
        <?php
endif;
endforeach;
?>
<?php else: ?>
  /*$first_condition, $second_condition, $third_condition and $fourth_condition  are false*/
  <div class="first-and-second-condition-false">Conditions are false</div>
<?php endif; ?>

