<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Max Mitchell</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <table class="table">
                <td id="menu">
                    <a href='about.html' class="menu-item">ABOUT</a>
                    <a href='work.html' class="menu-item">WORK</a>
                    <a href='contact.html' class="menu-item">CONTACT</a>
                </td>
                <td id="logo">
                    <a href="work.html"><img src="images\logo.png" class="logo" alt="Max Mitchell" style="aspect-ratio: auto; width: 25vh; flex-grow: 3;"></a>
                </td>
                <td id="placeholder"><a href='https://www.instagram.com/_max.ink/' target="_blank" class='menu-item'>@_MAX.INK</a></td>
            </table>
        </header>

        <div class="page-content">
            <div class="description">
                <h1>SCANOGRAPHY</h1>
                <p>Various experimental image-making with a flatbed scanner and digital augmentation. using found objects, illustration and photography. Playing with pattern, texture and refraction, embracing the unpredictability of collaboration between the computerised automation of scanography, and analogue human input.</p>
            </div>

            <div class="gallery">
                <?php
                $path = "images/scanography";
                $files = scandir($path);
                for ($i = 0; $i < count($files); $i++) {
                    if(preg_match("/^[^\?]+\.(jpg|jpeg|gif|png)(?:\?|$)/", $files[$i])) {
                        echo("<img src='$path/" . $files[$i] . "' class='gallery-image'>");
                    }  
                }
                ?>
            </div>
        </div>

        <footer>
            <p>MAXIMILIAN_MITCHELL_2022</p>
        </footer>
    </div>

</body>
</html>
