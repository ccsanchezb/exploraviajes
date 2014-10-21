<header>
    <div class="row">
        <div class="col-md-2" id="logo">
            <img src="public/images/logo.png" alt="Explora Viajes">
        </div>        
        <div class="col-md-2" id="redes">
            <a href="#"><img class="redes" src="public/images/facebook.png" alt="Encuentranos en Facebook"></a>
            <a href="#"><img class="redes" src="public/images/twitter.png" alt="Siguenos en Twitter"></a>
            <a href="#"><img class="redes" src="public/images/youtube.png" alt="Nuestro canal de Youtube"></a>
        </div>
        <div class="col-md-8">
            <nav class="navbar navbar-inverse" id="nav-transparent" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li <?php if ($page == "home") echo "class='active'"; ?>><a href="index.php">Inicio</a></li>
                        <li <?php if ($page == "") echo "class='active'"; ?>><a href="#" data-toggle="modal" data-target="#destinos">Nuestros Destinos</a></li>
                        <li <?php if ($page == "") echo "class='active'"; ?>><a href="backend_shopping.php">Excurciones</a></li>
                        <li <?php if ($page == "") echo "class='active'"; ?>><a href="backend_buyer.php">Cruceros</a></li>
                        <li <?php if ($page == "") echo "class='active'"; ?>><a href="backend_buyer.php">Destinos  Internacionales</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>