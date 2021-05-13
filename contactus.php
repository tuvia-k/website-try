<!DOCTYPE html>
<html lang="he">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="טלי גרנות בשן- טיפול זוגי ממוקד רגש EFT.
מטפלת זוגית ופרטנית בקליניקה ברמת גן בטיפול ממוקד רגש והתקשרות.
עוסקת בהדרכת מטפלים .
מלמדת בתוכנית שנתית של לימודי טיפול זוגי ממוקד רגש בגישה התקשרותית. 
עובדת בקליניקה בשילוב של גישות  מודרניות חווייתיות , גישות הומניסטיות , מיינדפולנס, ותיאוריות שעוסקות בהתקשרות מבוגרים וילדים">
    <meta name="author" content="tali kahana טלי כהנא">
    <meta name="keywords" content="רמת גן, טיפול ממוקד רגש, מטפלת זוגית ,EFT ,טיפול פרטני ,הדרכה ,טלי כהנא, טלי גרנות בשן,  טלי גרנות ,טיפול זוגי ,MSW ,התקשרות, צור קשר">
    <title>צור קשר- טלי גרנות כהנא</title>
    <link rel="shortcut icon" href="img/top.webp">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap-theme.min.css">
    <style>
        body {
            direction: rtl;
            background-color: #9B3265;
            background-size: auto;
            background-image: url(img/irina-iriser-mNz9Pa3tz34-unsplash.jpg);
            font-style: italic;

        }

        .alert {

            display: none;
        }

        textarea {

            border: 0px;
        }

        form {
            color: white;
            margin-top: 200px;
        }

        .navbar {
            font-size: 23px;
            position: fixed;
            width: 100%;
            z-index: 1;
            top: 0px;
           font-style: normal;
        }


        label {
            float: right;
        }

        #call {
            color: white;
            float: left;
            margin-top: 80px;
            width: 250px;
            height: 50px;
            display: block;
            background-color: green;
        }

        #contectusheader {
            float: right;
            color: white;
            margin-top: 80px;
            -webkit-text-fill-color: white;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: black;
            font-weight: bold;
        }

        #emailInput {
            position: relative;
        }
       @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu {
                display: none;
            }

            .navbar .nav-item:hover .nav-link {
                color: #fff;
            }

            .navbar .nav-item:hover .dropdown-menu {
                display: block;
            }

            .navbar .nav-item .dropdown-menu {
                margin-top:0 ;
            }
        }

    </style>

    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
   

    if(isset($_POST['submit'])){
    $to = "taligranotb@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission in the subject " . $_POST['subject'];
    $message = $from . " wrote the following:" . "\n\n" . "subject: ". $subject ."\n\n" . $_POST['text'];
    $message2 = "Here is a copy of your message " . "\n\n" . "subject: ". $subject . "\n\n" . $_POST['text'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: index.php');
//    exit();
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.     
    } 

    ?>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">טלי גרנות בשן</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <article class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <!--
      <li class="nav-item active">
        <a class="nav-link" href="#">דף הבית<span class="sr-only">(current)</span></a>
      </li>
-->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">דף הבית</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="abutMe.php">קצת על עצמי</a>
                </li>
               <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        קורסים
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="courses.php">קורס במרכז</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="courseBadarom.php">קורס בדרום</a>
                    </div>
                </li>
                 <li class="nav-item ">
                    <a class="nav-link" href="attachment.php">התקשרות</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="CouplesTherapy.php">טיפול זוגי</a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="contactus.php">צור קשר</a>
                </li>
               
            </ul>
        </article>
    </nav>









    <main class="container">









        <p>
            <h1 id="contectusheader">צור קשר</h1>
        </p>

        <a href="tel:+972 53 424 8088">
            <article id="call" class="alert alert-success">תתקשרו אלי 053-424-8088 </article>
        </a>


        <br>


        <form action="" method="post">
            <section class="form-group">
                <label for="exampleFormControlInput1">כתובת אימייל</label>
                <input name="email" class="form-control" id="exampleFormControlInput1" placeholder="enter Email">
            </section>
            <section class="form-group">
                <label for="exampleFormControlInput2">נושא</label>
                <input name="subject" class="form-control" id="exampleFormControlInput2" placeholder="enter subject">
            </section>
            <section class="form-group">
                <label for="exampleFormControlTextarea3">תוכן ההודעה</label>
                <textarea name="text" class="form-control" id="exampleFormControlTextarea3" rows="3" placeholder="enter whatever you wanted to write"></textarea>
            </section>
            <input name="submit" type="submit" class="btn btn-primary mb-2">

        </form>
        <section id="emailSent" class="alert alert-success" role="alert">Your request has been sent, we will get back to you soon</section>
        <section id="emailInput" class="alert alert-danger" role="alert">your email is not valid</section>
        <section id="subjectInput" class="alert alert-danger" role="alert">the subject is empty</section>
        <section id="textInput" class="alert alert-danger" role="alert">the text field is empty</section>

    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $("form").submit(function(e) {

            var emailValue = $("#exampleFormControlInput1").val();
            var subjectValue = $("#exampleFormControlInput2").val();
            var textValue = $("#exampleFormControlTextarea3").val();

            function validateEmail(emailValue) {
                const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(emailValue).toLowerCase());
            };


            if (validateEmail(emailValue) == false) {
                $("#emailInput").toggle();
                e.preventDefault();
            }
            if (subjectValue == "") {
                $("#emailInput").toggle();
                e.preventDefault();
                $("#subjectInput").toggle();
            };
            if (textValue == "") {
                $("#textInput").toggle();
                e.preventDefault();
                $("#emailInput").toggle();
            }
            if (subjectValue != "" && textValue != "" && validateEmail(emailValue) != false) {
                $("#emailSent").toggle();
            }


        });

    </script>
</body>

</html>