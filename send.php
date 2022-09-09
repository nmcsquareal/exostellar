<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $body = "
            <p>Thank you for Subscribing to our newsletters update.</p><br>
            <p>Click here to unsubscribe. </p><button>Unsubscribe</button>
    
    ";
    
    //index page
    if(isset($_POST['subscribetous'])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'exostellar.info@gmail.com';
        $mail->Password = 'asgsbvniowyexhut'; 
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('exostellar.info@gmail.com');
        $mail->addAddress($_POST['emailadd']);

        $mail->isHTML(true);

        $mail->Subject = "Exostellar Info";
        $mail->Body = $body;

        $mail->send();

        echo "
            <script>
            alert('Thank you for Subscribing!');
            window.location.href = 'index.php';
            </script>
        ";

    }

    //about page
    if(isset($_POST['subscribeAbout'])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'exostellar.info@gmail.com';
        $mail->Password = 'asgsbvniowyexhut'; 
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('exostellar.info@gmail.com');
        $mail->addAddress($_POST['emailadd']);

        $mail->isHTML(true);

        $mail->Subject = "Exostellar Info";
        $mail->Body = $body;

        $mail->send();

        echo "
            <script>
            alert('Thank you for Subscribing!');
            window.location.href = 'pages/about.php';
            </script>
        ";

    }

    //moon page
    if(isset($_POST['subscribeMoon'])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'exostellar.info@gmail.com';
        $mail->Password = 'asgsbvniowyexhut';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('exostellar.info@gmail.com');
        $mail->addAddress($_POST['emailadd']);

        $mail->isHTML(true);

        $mail->Subject = "Exostellar Info";
        $mail->Body = $body;

        $mail->send();

        echo "
            <script>
            alert('Thank you for Subscribing!');
            window.location.href = 'pages/MoonExploration.php';
            </script>
        ";

    }

    //quiz page
    if(isset($_POST['subscribeQ'])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'exostellar.info@gmail.com';
        $mail->Password = 'asgsbvniowyexhut'; 
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('exostellar.info@gmail.com');
        $mail->addAddress($_POST['emailadd']);

        $mail->isHTML(true);

        $mail->Subject = "Exostellar Info";
        $mail->Body = $body;

        $mail->send();

        echo "
            <script>
            alert('Thank you for Subscribing!');
            window.location.href = 'pages/Quiz.php';
            </script>
        ";

    }

    //spaceExploration page
    if(isset($_POST['subscribeExpl'])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'exostellar.info@gmail.com';
        $mail->Password = 'asgsbvniowyexhut'; 
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('exostellar.info@gmail.com');
        $mail->addAddress($_POST['emailadd']);

        $mail->isHTML(true);

        $mail->Subject = "Exostellar Info";
        $mail->Body = $body;

        $mail->send();

        echo "
            <script>
            alert('Thank you for Subscribing!');
            window.location.href = 'pages/SpaceExploration.php';
            </script>
        ";

    }
?>