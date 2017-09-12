<?php require('quoteLogic.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Diana Teacher</title>
    <meta name="description" content="Diana Teacher"/>
    <meta name="keywords" content="HTML,CSS,Language,Learn,Russian,English,West Hartford,Diana,Kleban,Teacher" />
    <meta name="author" content="Diana Kleban">
    <meta name="HandHeldFriendly" content="true">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/diana_teacher.css" type="text/css" />
</head>
<body>
    <div id="wrapper">
        <header>
            <h1 id="imgHere">
                Something about Diana Kleban</h1>
            <hr id="tophr" />
        </header>
        <aside>
                <img src="images/DianaTeacher.jpg" id="imgTeacher" title="Diana Kleban" alt="Diana Kleban" />
        </aside>
        <article>
            <section id="teacher">
                <h2 id="teacherNm">
                    Diana Kleban</h2>
                <p>
                    Diana was born in Moscow, Russia, and that’s where her educational career began. She
                    attended Moscow Pedagogical University and completed her degree in New York. Currently, she lives in CT and WI.
                </p>
                <p>
                    Everywhere Diana goes, she is looking for an opportunity to utilize her passions
                    for teaching and web development. Always full of ideas and energy, she has worked as a teacher, consultant, accountant, actuary, and a web developer.
                </p>
                <p>She has been a server web developer for more than 13 years using C++ and C# ASP.net, but never used XAMPP, github, cmder, DigitalOcean or PHP.
                    Currently she works on SharePoint technology and utilizes the knowledge of javascript and client side development.
                </p>

                <p>Her hobbies: <b>reading, traveling, and learning new things</b> are the source of her inspiration as a teacher and a developer.
                     </p>
            </section>
            <section id="info">
                <h3>Daily quote by Mark Twain:</h3>

                  <p> <?php echo $phrase; ?> </p>

            </section>
        </article>
        <footer>
            <p>
                <strong>Diana Kleban</strong> West Hartford, CT
                <br />
                <a href="mailto:dik548@g.harvard.com">dik548@g.harvard.com</a>
                <br />
                Copyright @2017. All Rights Reserved.
            </p>
        </footer>
    </div>
</body>
</html>
