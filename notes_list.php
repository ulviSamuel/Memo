<html>
    <head>
        <link rel="stylesheet" href="css/notes_list_style.css">
        <meta charset="ISO-8859-1">
        <?php session_start(); ?>
    </head>

    <body>
        <h1 id="title">Note</h1>
        <?php
            $con    = mysqli_connect("192.168.107.149", "root", "", "memo2");
            $idUser = $_SESSION['idUser'];
            $sql    = "SELECT * FROM tmemo tm WHERE (tm.titolo != '' OR tm.testo != '') AND tm.idUser = $idUser ORDER BY titolo ASC, testo ASC";
            $res    = mysqli_query($con, $sql);
            if(mysqli_num_rows($res) > 0)
            {
                while($row = mysqli_fetch_assoc($res))
                {
                    echo "<div class='tile'>";
                    $idNota = $row['id'];
                    $title  = $row['titolo'];
                    $text   = $row['testo'];
                    $data   = $row['datains'];
                    echo "<a id='tile_link' href='show_note.php?idNota=$idNota'>";
                    echo "<h2 class='tile_title'>$title</h2>";
                    if(strlen($text) < 20)
                    {
                        $textArray = explode("<br />", $text);
                        $textArray = array_map('trim', $textArray);
                        if(count($textArray) > 1)
                        {
                            if(strlen($textArray[0]) < 20)
                                echo "<p class='tile_text_piece'>".$textArray[0]."...</p>";
                            else
                                echo "<p class='tile_text_piece'>".substr($textArray[0], 0, 20)."...</p>";
                        }
                        else
                            echo "<p class='tile_text_piece'>$text</p>";
                    }
                    else
                    {
                        $textArray = explode("<br />", $text);
                        $textArray = array_map('trim', $textArray);
                        if(count($textArray) > 1)
                        {
                            if(strlen($textArray[0]) < 20)
                                echo "<p class='tile_text_piece'>$textArray[0]...</p>";
                            else
                                echo "<p class='tile_text_piece'>".substr($textArray[0], 0, 20)."...</p>";
                        }
                        else
                            echo "<p class='tile_text_piece'>".substr($text, 0, 20)."...</p>";
                    }
                    echo "<span class='data'>$data</span>";
                    echo "</a>";
                    echo "</div>";
                }
            }
        ?>
        <a href="new_note.html"><button id="floating_button">+</button></a>
    </body>
</html>