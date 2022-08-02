<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $url = $_POST['url'];
        $message = $_POST['message'];

        $mailTo = "uwe.gilbers@gmail.com";
        $headers = "From: ".$email;
        $txt = "Du hast eine Nachricht von".$name.".\n\n".$message;

        mail($mailTo, $email, $txt, $headers);
        header("Location: index.php?mailsend");

    }
?>