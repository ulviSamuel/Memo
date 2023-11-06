<html>
    <head>
        <?php session_start(); ?>
        <meta charset="ISO-8859-1">
    </head>

    <body>
        <?php
            if(isset($_POST['title']))
            {
                $title = nl2br($_POST['title']);
                if(isset($_POST['text']))
                {
                    $text = nl2br($_POST['text']);
                    if($text != "" || $title != "")
                    {
                        if($text == "")
                        $text = "No text here";
                        if($title == "")
                            $title = "No Title";
                        $com = mysqli_connect("192.168.107.149", "root", "", "memo2");
                        $idUser = $_SESSION['idUser'];
                        $data   = date("Y-m-d");
                        $idUser = mysqli_real_escape_string($com, $idUser);
                        $title = mysqli_real_escape_string($com, $title);
                        $text = mysqli_real_escape_string($com, $text);
                        $data = mysqli_real_escape_string($com, $data);
                        $sql = "INSERT INTO tmemo (idUser, titolo, testo, datains) VALUES ('$idUser', '$title', '$text', '$data')";
                        mysqli_query($com, $sql);
                        mysqli_close($com);
                    }
                    header("Location: notes_list.php");
                    exit;
                }
            }
        ?>
    </body>
</html>