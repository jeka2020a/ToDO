<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/adaptive.css">
    <!--MAIN FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <!--LOGO-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Playwrite+AR:wght@100..400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="developer-contacts">
        <div class="container">
            <div class="developer-contacts__box">
                Developed by <span class="orange">evgenzekul@gmail.com</span>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="header__block">
                <div class="header__inner">
                    <a href="" class="header__logo">
                        To<span class="orange">DO</span>
                    </a>
                    <a href="/form" class="header__link">Form</a>
                </div>
            </div>
        </div>
    </header>

    <section class="todo">
        <div class="container">
            <div class="todo__flex">
                <div class="todo__list">
                    <table class="todo__table">
                        <tr>
                            <th class="todo__table-title">Task</th>
                            <th class="todo__table-title">Date of Start</th>
                            <th class="todo__table-title">Deadline</th>
                            <th class="todo__table-title">Priority</th>
                        </tr>
                        
                        <?php
                            $DB = new DB();
                            $DB->getData();
                        ?>
                        
                    </table>
                </div>
                <div class="todo__priority">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab corporis doloremque obcaecati, odit quaerat blanditiis harum neque sint. Vero repellendus ipsam blanditiis fuga autem quia ipsa velit repudiandae quasi voluptatibus!
                </div>
            </div>
            
        </div>
    </section>

</body>
</html>