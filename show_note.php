<html>
    <head>
        <link rel="stylesheet" href="css/show_note_style.css">
        <meta charset="ISO-8859-1">
    </head>

    <body>
        <div id="container">
            <a href="notes_list.php" id="back_link">
                <img id="back_link_icon" src="icons/icons8-back-50.png" alt="Back Icon">
                <span class="back_link_text">All Notes</span>
            </a>

        <?php
            $title = $_GET['title'];
            $text  = $_GET['text'];
            echo "<h1 id='title'>$title</h1>";
            echo "<p id='text'>$text</p>";
        ?>
        </div>
    </body>
</html>