<?php 
/*
 Template Name: Мой шаблон страницы
*/
?>

<?php get_header();?>
<main id="Block">
    <div class="container">
        <div class="row justify-center">
            <h1 class="descHead ">المنزل</h1>
            <div class="col-auto description">
                <p>
                    <?php the_post(); the_content();?>
                </p>
                

            </div>
        </div>
<div class="forms">
            <div class="container">
                <h1>هنا هو نموذج الملاحظات</h1>
                <form action="" method="post" class="row" autocomplete="on">
                    <div class="col-6 col-s-12">
                        <input type="text" name="Name" placeholder="اسم">
                    </div>
                    <div class="col-6 col-s-12">
                        <input type="email" name="Email" placeholder="البريد الإلكتروني">
                    </div>
                    <div class="col-12 col-s-12">
                        <textarea placeholder="شركتنا هي الأفضل في العالم" rows="3" name="Message"></textarea>
                    </div>
                    <div class="offset-9 col-3 offset-s-0 col-s-12 offset-m-6 col-m-6 ">
                        <button type="submit" name="send">إرسال</button>
                    </div>
                    <?php if(isset($_POST["send"])){
                                if(isset($_POST["Name"]) && isset($_POST["Email"]) && isset($_POST["Message"])){
                                         mail("example@mail.ru", "Тема сообщения", $_POST["Message"], "From:".$_POST["Email"].""); 
                    
                                }}
                    ?>

                </form>
            </div>
        </div>
    </div>
</main>
