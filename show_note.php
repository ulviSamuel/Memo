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
            $idNota = $_GET['idNota'];
            $con = mysqli_connect("192.168.107.149","root", "", "memo2");
            $sql = "SELECT titolo, testo FROM tmemo tm WHERE tm.id = $idNota";
            $res = mysqli_query($con, $sql);
            if(mysqli_num_rows($res) == 1)
            {
                $row = mysqli_fetch_assoc($res);
                $title = $row['titolo'];
                $text  = $row['testo'];
                echo "<h1 id='title'>$title</h1>";
                echo "<p id='text'>$text</p>";
            }
        ?>
        </div>
    </body>
</html>