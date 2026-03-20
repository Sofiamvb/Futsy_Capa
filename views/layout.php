<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/app.css">
</head>
<body>

    <header class = "header">
        <div class="contenedor contenido-header">
            <div class="barra">
               <a href="/">
                <img src="../public/img/Logo-PCI.png" alt="Logotipo de futsy">
               </a>
               <div class="derecha">
                    <div class="navegacion">
                    <a href="/nosotros">HOME</a>
                    <a href="/anuncios">COLLECT</a>
                    <a href="/blog">TOP</a>
                   </div>
               </div>
            </div>
        </div>
    </header>

    <?php echo $contenido ?>

    <footer class = "footer seccion">
            <div class="contenedor contenedor-footer">
                <div class="navegacion">
                    <a href="/nosotros">Nosotros</a>
                    <a href="/anuncios">Anuncios</a>
                    <a href="/blog">Blog</a>
                    <a href="/contacto">Contacto</a>
                </div>
            </div>
            <p class = "copyright">Todos los derechos Reservados <?php echo date ('Y');?> &copy;</p>
    </footer>
       
</body>
</html>