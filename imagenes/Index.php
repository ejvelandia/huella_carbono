<?php include_once("/modal/seleccion.php") ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huella de carbono</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header class="hero">
        <div class="container">
            <section class="hero__container">
                <nav class="nav">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                    </button>
                    <a href="#" class="nav__items nav__items--cta" style="color: white;font-size:xx-large;"> test de carbono
                    </a>
                </nav>
                <div class="hero__texts">
                    <h1 class="hero__title" style="color: white;font-size: xxx-large;">HUELLA DE CARBONO</h1>
                    <h2 class="hero subtitle" style="color: white;">Cuidando el medio ambiente</h2>
                    <a href="#" class="hero__cta">contactame ahora</a>
                </div>
            </section>


            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(166, 255, 0);"></path>
            <!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></svg>
        </div>
        </div>
    </header>
    <main>

        <section class="presetation container">
            <img src="imagenes/Edwin.jpeg" alt="" class="presentation__picture">
            <h2 class="subtitle">Mi Nombre: Edwin Velandia</h2>
            <p class="presentation__copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus totam
                vitae enim dolorem voluptates debitis delectus, impedit, incidunt deserunt cumque nostrum dignissimos
                eveniet harum voluptas praesentium sapiente autem exercitationem ullam!</p>
            <a href="#" presentation__cta>contactame</a>
        </section>
    </main>
    </head>

    <body>