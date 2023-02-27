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
                <h1>PLAYGROUND MENTALITY</h1>

                <p>*****warning for flashing images*****</p>
                <p>A second attempt at an animated short film, this further explores techniques and ideas seen in OPTIMA, with more of a focus on individual looped animations; found objects, illustration, photography and heavy digital manipulation. The film is open to interpretation, but is based around ideas of how we psychologically place ourselves within a space, and the countless instances that feed into our perception of space and therefore our identity.</p>
                <p>It promotes the perception of our environment [found objects, photos] as open to creative exploration. Reflecting concepts of parkour philosophy and approach to spacial interaction, metaphorically 'opening up' these images through movement, and figuratively creating subsequent 'digital spaces' for the viewer to inhabit. </p>
                <p>music: Wish by Blood Orange</p>
                <p>Klavierwerke by James Blake</p>
                <iframe title="Video Player" class="embed-content" src="https://www-ccv.adobe.io/v1/player/ccv/LuyYbF6JL3B/embed?bgcolor=%23191919&lazyLoading=true&api_key=BehancePro2View" frameborder="0" allowfullscreen></iframe>

                <div class="gallery">
                <?php
                $path = "images/animation/playground-mentality";
                $files = scandir($path);
                for ($i = 0; $i < count($files); $i++) {
                    if(preg_match("/^[^\?]+\.(jpg|jpeg|gif|png)(?:\?|$)/", $files[$i])) {
                        echo("<img src='$path/" . $files[$i] . "' class='gallery-image'>");
                    }  
                }
                ?>
            </div>
            </div>
        </div>

        <footer>
            <p>MAXIMILIAN_MITCHELL_2022</p>
        </footer>
    </div>

</body>
</html>