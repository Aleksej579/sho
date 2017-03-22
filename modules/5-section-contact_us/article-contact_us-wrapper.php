<article class="article-contact_us-wrapper">
    <p><span class="contact_us_32">Свяжитесь с нами</span><br>
        <span class="contact_us_16">Вы знаете, что делать</span></p>
    <div class="contact_us_wrapper">
        <div class="contact_us_wrapper_left">
            <div class="contact_us-circle_telephone"></div><br><br>
            <p><span class="contact_us_info">
                    Нет, звонить совсем<br>
                    не обязательно</span><br><br>
            </p>
        </div>
        <div class="contact_us_wrapper_center">
            <div class="contact_us-circle_geolocation"></div><br><br>
            <p><span class="contact_us_info">
                    Но есть шанс попасть<br>
                    на собеседование</span><br><br>
            </p>
        </div>
        <div class="contact_us_wrapper_right">
            <div class="contact_us-circle_message"></div><br><br>
            <p><span class="contact_us_info">
                    Пришлите нам письмо с резюме<br>
                    и выполненным текстовым заданием</span><br><br>
            </p>
        </div>
    </div>
    <form action="/php/form_message.php" method="POST" class="form-write_to_us">
        <input class="write_us" name="name" type="text" placeholder="Ваше имя"/>
        <input class="write_us" name="email" type="text" placeholder="Email"/>
        <input class="write_us" name="number" type="text" placeholder="Номер телефона"/>
        <input class="write_us" style="height: 195px" name="write" type="text" placeholder="Напишите о том, что хотели бы у нас спросить"/>
        <div class="form-write_to_us-btn_wrapper">
            <button class="write_to_us-btn" type="submit">Отправить</button>
        </div>
    </form>
    <footer class="contact_us-footer">
        Никакие из прав этого технического задания не защищены законом<br>
        и могут свободно распространяться где и когда угодно.
    </footer>
</article>