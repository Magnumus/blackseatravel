<section id="form">
    <div class="container">
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
</section>

   <footer id="bottom">
    <div class="container">
        <div class="row align-center justify-between">
            <ul class="col-3 col-s-5">
                <li>
                    <ul>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-rss"></i></a></li>
                    </ul>
                </li>
            </ul>
            <div class="column">
                <div class="col-1 text-right">
                    <a href="" id="up"><h1>المنزل</h1></a>
                </div>
                <div class="col-3 text-right col-s-7">
                    <h3> ألواح من الصلصال وما إلى ذلك. لأتمتة معالجة الوثائق من القرن</h3>
                </div>
            </div>
        </div>
    </div>
</footer>