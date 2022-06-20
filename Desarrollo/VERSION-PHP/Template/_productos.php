<section id="productos">
			<h3>PRODUCTOS</h3>
			<div class="dropdown">
				<button onclick="myFunction()" class="dropbtn">
					¿Qué quieres comprar?
				</button>
				<div id="myDropdown" class="dropdown-content">
					<a href="#telefonos">TÉLEFONOS</a>
					<a href="#televisores">TELEVISORES</a>
					<a href="#consolas">VIDECONSOLAS</a>
					<a href="#camaras">CÁMARAS</a>
				</div>
			</div>

			<div id="titulo">
				<h3>TELÉFONOS</h3>
			</div>
			<div class="telefonos">
			<?php foreach ($product_shuffle as $item) {;
        ?>
				<figure>
					<img src="<?php echo $item['item_image'] ?? "img/EDIT-TEL_0000_picture.php.jpg" ?>" alt=""/>
					<figcaption>
						<h5></h5>
						<button><a href="<?php printf('%s?item_id=%s', 'index3.php',  $item['item_id']); ?>">+</a></button>
					</figcaption>
				</figure>
				<?php } // closing foreach function ?>
			</div>
			<div id="titulo">
				<h3>TELEVISORES</h3>
			</div>
			<div id="televisores">
			<?php foreach ($televisores_shuffle as $item) {;
        ?>
				<figure>
					<img
						src="<?php echo $item['item_image'] ?? "img/IMG-TV_0001_vintage-tv-television-antigua-caja-madera-aislada-blanco-trayectoria-recortes-objeto_1484-2108.jpg" ?>"
						alt=""
					/>
					<figcaption>
						<h5></h5>
						<button><a href="<?php printf('%s?item_id=%s', 'index3.php',  $item['item_id']); ?>">+</a></button>
					</figcaption>
				</figure>
				<?php } // closing foreach function ?>
			</div>
			<div id="titulo">
				<h3>CÁMARAS</h3>
			</div>
			<div id="camaras">
			<?php foreach ($camaras_shuffle as $item) {;
        ?>
				<figure>
					<img
						src="<?php echo $item['item_image'] ?? "img/img-cam_0003_150233331-una-vieja-cámara-de-cine-sobre-fondo-blanco-vista-frontal-aislar-.jpg" ?>"
						alt=""
					/>
					<figcaption>
						<h5></h5>
						<button><a href="<?php printf('%s?item_id=%s', 'index3.php',  $item['item_id']); ?>">+</a></button>
					</figcaption>
				</figure>
				<?php } // closing foreach function ?>
			</div>
			<div id="titulo">
				<h3>VIDEOCONSOLAS</h3>
			</div>
			<div id="consolas">
			<?php foreach ($videoconsolas_shuffle as $item) {;
        ?>
				<figure>
					<img
						src="<?php echo $item['item_image'] ?? "img/IMG-TV_0001_vintage-tv-television-antigua-caja-madera-aislada-blanco-trayectoria-recortes-objeto_1484-2108.jpg" ?>"
						alt=""
					/>
					<figcaption>
						<h5></h5>
						<button><a href="<?php printf('%s?item_id=%s', 'index3.php',  $item['item_id']); ?>">+</a></button>
					</figcaption>
				</figure>
				<?php } // closing foreach function ?>
			</div>
		</section>