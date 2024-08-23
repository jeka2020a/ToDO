<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/form.css">
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

    <section class="titlebox">
        <div class="container">
            <div class="titlebox__inner">
                <a href="/" class="header__logo">
                    To<span class="orange">DO</span>
                </a>
            </div>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <form action="" class="form__form" method="post">
                <p class="form__text">
                    Task
                </p>
                <input class="form__input" type="text" placeholder="    Task" name="Task">
                <p class="form__text">
                    Date of start
                </p>
                <input class="form__input" type="date" placeholder="    Date of start" name="Date_of_start">
                <p class="form__text">
                    Deadline
                </p>
                <input class="form__input" type="date" placeholder="    Deadline" name="Deadline">
                <p class="form__text">
                    Priority
                </p>
                <select class="form__input" name="Priority" id="">
                    <option class="option" value="High">High</option>
                    <option class="option" value="Middle">Middle</option>
                    <option class="option" value="Low">Low</option>
                </select>

                <button class="form__button" name="send">Send</button>

                <?php
                    if (isset($_POST['send'])) {
                        $DB = new DB();
                        $DB->setData($_POST['Task'] , $_POST['Date_of_start'] , $_POST['Deadline'] , $_POST['Priority']);
                    }
                ?>
            </form>
        </div>
    </section>
</body>
</html>