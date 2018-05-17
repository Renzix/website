<!DOCTYPE html>
<html>
    <?php include "sidebar.html" ?>
    <div id=main>
    <?php include "topbar.html" ?>
        <head>
            <?php include "header.html" ?>
        </head>
        <body> 
            <div id="ren-content">
                <h1>Music</h1>
                <div class="ren-inline-block">
                    <h2>Special K</h2>
                    <audio controls>
                        <source src="../Music/specialk.ogg">
                    </audio>
                    <p>Download Special K Here</p>
                    <ul class="ren-download">    
                        <li><a href="../Music/specialk.mp3" download>mp3</a></li>
                        <li><a href="../Music/specialk.ogg" download>ogg</a></li>
                        <li><a href="../Music/specialk.wav" download>wav</a></li>
                    </ul>
                </div>
            </div>
        </body>
        <?php include "footer.html"?>
    </div>
</html>