<html>
    <head>
        <link rel="stylesheet" href="css/notes_list_style.css">
        <meta charset="ISO-8859-1">
        <?php session_start(); ?>
    </head>

    <body>
        <h1 id="title">Note</h1>
        <?php
            $con    = mysqli_connect("localhost", "root", "", "memo2");
            $idUser = $_SESSION['idUser'];
            $sql    = "SELECT titolo, testo, datains FROM tmemo tm WHERE (tm.titolo != '' OR tm.testo != '') AND tm.idUser = $idUser ORDER BY titolo ASC, testo ASC";
            $res    = mysqli_query($con, $sql);
            if(mysqli_num_rows($res) > 0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    echo "<div class='tile'>";
                    $title = $row['titolo'];
                    $text  = $row['testo'];
                    $data  = $row['datains'];
                    echo "<a id='tile_link' href='show_note.php?title=$title&text=$text'";
                    echo "<h2 class='tile_title'>$title</h2>";
                    if(strlen($text) < 20)
                        echo "<p class='tile_text_piece'>$text</p>";
                    else
                        echo "<p class='tile_text_piece'>".substr($text, 0, 20)."...</p>";
                    echo "<span class='data'>$data</span>";
                    echo "</a>";
                    echo "</div>";
                }
            }
        ?>
        <a href="new_note.html"><button id="floating_button">+</button></a>
    </body>
</html>