<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestRB</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>
<body>
    <header>
        <div class="container">
          <div class="topbar">
            <div class="logo_adress">
                <div class="burger"><a href="#" id="mobile-menu-icon"><img src="images/burger.png"  id="burger_icon"></a></div>
                <div class="logo_img"><img src="images/logo_header.png"></div>
                <div class="location">
                    <div class="location_city">
                        <img src="images/pin.svg" class="location_city_img">
                        <p class="location_city_text">Ростов-на-Дону</p>
                    </div>
                    <div class="location_adress">ул. Ленина, 2Б</div>
                </div>
            </div>
            <div class="communication">
                <div class="communication_telephone">
                    <a href="tel:+78630000000" class="telephone_number"><img src="images/whatsapp_header.png" class="telephone_img">+7(863) 000 00 00</a>
                    <p class="location_city_mobile">Ростов-на-Дону</p>
                </div>
                <a class="communication_entry" href="#entry_form">Записаться на приём</a>
            </div>
            
          </div>
        </div>
          <div class="navigation">
            <div class="container">
                <ul class="navigation_links">
                    <li><a href="#" class="navigation_link">О клинике</a></li>
                    <li><a href="#" class="navigation_link">Услуги</a></li>
                    <li><a href="#" class="navigation_link">Специалисты</a></li>
                    <li><a href="#" class="navigation_link">Цены</a></li>
                    <li><a href="#" class="navigation_link">Контакты</a></li>
                </ul>                
            </div>
          </div>
            <div class="navigation-mobile" id="navigation-mobile">
                <div class="navigation-mobile__shell">
                    <div class="navigation-mobile__wrapper">
                        <ul class="navigation-mobile-links">
                            <li><a href="#" class="navigation-mobile-link">О клинике</a></li>
                            <li><a href="#" class="navigation-mobile-link">Услуги</a></li>
                            <li><a href="#" class="navigation-mobile-link">Специалисты</a></li>
                            <li><a href="#" class="navigation-mobile-link">Цены</a></li>
                            <li><a href="#" class="navigation-mobile-link">Контакты</a></li>
                        </ul>
                        <a class="communication_entry_mobile" href="#entry_form">Записаться на приём</a>
                    </div>
                </div>
            </div>

        <div id="entry_form">
            <div id="entry_form_fill">
                <a href="#" class="close_entry_form"><img src="images/close.png"></a>

                <form action="send.php" method="post" class="form_fill">
                    <input type="text" name="name" placeholder="Иванов Иван Иванович" required>
                    <input type="text" name="phone" class="phone" placeholder="+7(987)-654-32-10" required>
                    <input type="text" name="date" class="date" placeholder="Укажите дату записи, например, 01.02.2023" required>
                    <input type="submit" name="send" value="Записаться" class="form_send_button">
                </form>
            
            </div>
      </div>
      
    </header>
    <main>
        <section class="about">
            <div class="about_wrapper">
                
                <div class="container">
                    <div class="about_wrapper_mobile"><img src="images/about_background.png"></div>
                    <p class="about_title">Многопрофильная клиника для детей и взрослых</p>
                    <p class="about_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
            </div>



        </section>
        <section class="checkups">
            <div class="container">
                <div class="swiper">
                    <div class="swiper-wrapper">
                    <?php
                        $link = mysqli_connect("localhost", "root", "", "testrb");

                        $sql = 'SELECT * FROM checkups';
                        $result = mysqli_query($link, $sql);

                        while ($row = mysqli_fetch_array($result)) {
                            echo '<div class="swiper-slide checkup">
                            <div class="checkup_wrapper">
                                <div class="checkup_card">
                                    <div class="checkup_image_mobile"><img src="images/checkup1_background.png"></div>
                                    <div class="checkup_info">
                                        <div class="checkup_name">
                                            <div class="checkup_title">'. $row['title'] .'</div>
                                            <div class="checkup_gender">'. $row['gender'] .'</div>
                                        </div>
                                        <ul class="checkup_denominations">
                                            <li>'. $row['denomination1'] .'</li>
                                            <li>'. $row['denomination2'] .'</li>
                                            <li>'. $row['denomination3'] .'</li>
                                            <li>'. $row['denomination4'] .'</li>
                                        </ul>
                                        <div class="checkup_price">
                                            <div class="checkup_price_current">Всего '. $row['price_current'] .'₽</div>
                                            <div class="checkup_price_irrelevant">'. $row['price_irrelevant'] .'₽</div>
                                        </div>
                                    </div>

                                    <div class="checkup_button">
                                        <button class="checkup_enroll">Записаться</button>
                                        <button class="checkup_more">Подробнее</button>
                                    </div>

                                </div>
                                </div>
                            </div>';

                        }
                    ?>
                    </div>
                </div>
                <div class="bottom-bar">
                    <div class="button_prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="button_next"></div>
                </div>
            </div>
        </section>
    </main>  
    <footer>
        <div class="container">
            <div class="footer_wrapper">
                <div class="footer_logo">
                    <img src="images/logo_footer.png">
                    <ul class="navigation_links_mobile">
                        <li><a href="#" class="navigation_link_footer">О клинике</a></li>
                        <li><a href="#" class="navigation_link_footer">Услуги</a></li>
                        <li><a href="#" class="navigation_link_footer">Специалисты</a></li>
                        <li><a href="#" class="navigation_link_footer">Цены</a></li>
                        <li><a href="#" class="navigation_link_footer">Контакты</a></li>
                    </ul>
                </div>
                <ul class="navigation_links">
                    <li><a href="#" class="navigation_link_footer">О клинике</a></li>
                    <li><a href="#" class="navigation_link_footer">Услуги</a></li>
                    <li><a href="#" class="navigation_link_footer">Специалисты</a></li>
                    <li><a href="#" class="navigation_link_footer">Цены</a></li>
                    <li><a href="#" class="navigation_link_footer">Контакты</a></li>
                </ul>
                <div class="social-media">
                    <a href="#" class="social-media_link"><img src="images/instagram_footer.png"></a>
                    <a href="#" class="social-media_link"><img src="images/whatsapp_footer.png"></a>
                    <a href="#" class="social-media_link"><img src="images/telegram_footer.png"></a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/imask"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="bundle.js"></script>
</body>
</html>