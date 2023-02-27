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
                <h1>ESCAPISM</h1>
                <p>A project on the brief of a visual 'personal manifesto'. It takes the form of these illustrated representations of space and architecture within a void-like environment. The work depicts a psychogeographical concept of interpreting ones mental space as a physical space, therefore seperating oneself from it, as a metaphorical tool for navigating ones mental battles.</p>
                <p>Hypothetically challenging the pavements and staircases, the images suggest a creation of ones own map, a reaction to the physical confines of the urban environment. The concept of world-building is pushed further by an unknown language, supposedly a new understanding of these personal, mental spaces that supercedes human language. This again reflects notions of spacial engagement present in parkour, in which the physical challenges emulate emotional or tangible challenges faced in every day life.</p>
            </div>

            <div class="gallery">
            <?php
                $path = "images/escapism";
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