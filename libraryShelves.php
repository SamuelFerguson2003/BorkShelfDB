<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Library</title>

    <!-- Google fantasy font as requested-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Rocker&display=swap" rel="stylesheet">
    
    <link rel="icon" href="UI_Images/dragonLogo.png">
    <link rel="stylesheet" href="Styles/baseStyles.css">
    <link rel="stylesheet" href="Styles/libraryStyles.css">
    <script src="Scripts/soundHandler.js"></script>
</head>
<body>

    <audio autoplay loop>
        <source src="Sounds/Tavern.mp3">
    </audio>

    <div>
        <h1 class="fantasyScratch">The collector's treasures will be unveiled soon!</h1>
    </div>

    <div id="mainContent">
        <div id="bookshelfGrid">
            <?php
            echo "Book details will go here"
            ?>
        </div>

        <div id="controlPanel">
            <div id="searchBar">
                <input type="text" placeholder="Search" name="searchShelf">
                <button type="submit" name="sendSearch" class="fantasyButton">Search</button>
            </div>

            <div id="buttonGrid">
                <form method="post">
                    <button type="submit" name="showFinished" class="fantasyButton">Show Finished</button>
                    <button type="submit" name="showUnread" class="fantasyButton">Show Unread</button>
                    <button type="submit" name="showNeedtoBuy" class="fantasyButton">Show Need-to-Buy</button>
                    <button type="submit" name="resetShelf" class="fantasyButton">Reset Shelf</button>
                </form>
            </div>

            <a href="home.html" class="fantasyButton" id="turnBack">Return Home</a>
        </div>
    </div>

</body>
</html>