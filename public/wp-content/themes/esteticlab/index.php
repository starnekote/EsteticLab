<!--
Template Name: Головна
-->
<?php get_header(); ?>
    <!-- ШАПКА -->
     <div class="header">
        <div class="row">
            <div class="image col-6">
                <h1><?php echo SCF::get('nickname'); ?></h1>
                <img src="<?php echo wp_get_attachment_url(SCF::get('header_img'))?>" alt="image">
            </div>
            <div class="text col-6">
                <h2><?php echo SCF::get('header_title'); ?></h2>
                <p><?php echo SCF::get('header_text'); ?></p>
                <div class="header_btn">
                    <img src="<?php echo wp_get_attachment_url(SCF::get('arrow'))?>" alt="Arrow">
                    <a href="#request"><?php echo SCF::get('header_call_to_action'); ?></a> 
                </div>
            </div>
        </div>
     </div>
     <!-- ДОСЯГНЕННЯ -->
      <div class="achives">
        <div class="container">
            <div class="row">
                <?php $loop = SCF::get('achives');
                foreach($loop as $row){?>
                <div class="col-4 achive">
                    <h2><?php echo $row['achive_num']?></h2>
                    <p><?php echo $row['achive_text']?></p>
                </div><?php } ?>
            </div>
        </div>
      </div>
      <!-- ПРО НАС -->
       <a id="about"></a>
       <div class="about">
            <div class="container">
                <div class="row">
                    <div class="left col-6">
                        <div class="text">
                            <h2><?php echo SCF::get('about_title', 22); ?></h2>
                            <p><?php echo SCF::get('about_text', 22); ?></p>
                        </div>
                        <a class="btn" href="#request"><?php echo SCF::get('about_cta', 22); ?></a>
                    </div>
                    <div class="crop-box col-6"><img src="<?php echo wp_get_attachment_url(SCF::get('about_img', 22))?>" alt="image"></div>
                </div>
            </div>
       </div>
       <!-- СЕРВІСИ -->
       <a id="сervices"></a>
       <div class="cervices">
            <div class="container">
                    <h2>Наші послуги</h2>
                    <div class="row">
                        <?php $loop = SCF::get('cervice', 30);
                        foreach($loop as $row){?>
                        <div class="col-12 cervice">
                            <div class="crop-box col-6"><img src="<?php echo wp_get_attachment_url($row['cervice_img'])?>" alt=""></div>
                            <div class="text col-6">
                                <h3><?php echo $row['cervice_title']?></h3>
                                <p><?php echo $row['cevice_text']?></p>
                            </div> 
                        </div> <?php } ?>
                    </div>
            </div>
       </div>
    <!-- СЕРТИФІКАТИ -->
       <a id="certificates"></a>
       <div class="certificates">
            <div class="container">
                <div class="row">
                    <div class="crop-box col-6"><img src="images/pexels-ivan-samkov-5659056 1.png" alt="image"></div>
                    <div class="left col-6">
                        <div class="text">
                            <h2>Подарункові сертифікати</h2>
                            <p>Ви можете замовити подарункові сертифікати на будь-яку суму. <br><br>
                            Ми цінуємо Ваш час. Тому що знаємо, як буває важко виділити кілька годин на догляд за собою.
                            </p>
                        </div>
                        <a class="btn" href="">Замовити сертифікат</a>
                    </div>
                </div>
            <h1>EsteticLab</h1>
            </div>
       </div>
    <!-- ВІДГУКИ -->
        <a id="reviews"></a>
        <div class="swiper">
            <h2>Відгуки</h2>
            <div class="card-wrapper">
                <ul class="card-list swiper-wrapper">
                    <li class="card-item swiper-slide">
                        <div class="crop-box"><img src="images/image 8.png" alt=""></div>
                        <h3>Юлія Ковальчук</h3>
                        <p class="nickname">@juuuliiakov</p>
                        <p class="text">Дуже зручно, що всі процедури можна зробити 
                        в одному місці! Якість послуг завжди на висоті, 
                        я повністю довіряю майстрам салону. Люблю послугу в 4 руки - можна зекономити час, зробивши одночасно манікюр і педикюр 
                        або ж зачіску та макіяж за годину. Рекомендую!</p>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="crop-box"><img src="images/image 7.png" alt=""></div>
                        <h3>Анастасія Кравченко</h3>
                        <p class="nickname">@kravchenko.a</p>
                        <p class="text">Лазерна епіляція в EsteticLab - найбільш ефективний і безболісний метод позбавлення 
                        від небажаного волосся з усіх,
                        що я пробувала. Результатом я більш ніж задоволена, 
                        а професійні та чуйні фахівці клініки проводять процедуру максимально комфортно для клієнта.
                        Окреме спасибі косметологу Ганні!</p>
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="crop-box"><img src="images/image 8.png" alt=""></div>
                        <h3>Юлія Ковальчук</h3>
                        <p class="nickname">@juuuliiakov</p>
                        <p class="text">Дуже зручно, що всі процедури можна зробити 
                        в одному місці! Якість послуг завжди на висоті, 
                        я повністю довіряю майстрам салону. Люблю послугу в 4 руки - можна зекономити час, зробивши одночасно манікюр і педикюр 
                        або ж зачіску та макіяж за годину. Рекомендую!</p>                        
                    </li>
                    <li class="card-item swiper-slide">
                        <div class="crop-box"><img src="images/image 7.png" alt=""></div>
                        <h3>Анастасія Кравченко</h3>
                        <p class="nickname">@kravchenko.a</p>
                        <p class="text">Лазерна епіляція в EsteticLab - найбільш ефективний і безболісний метод позбавлення 
                        від небажаного волосся з усіх,
                        що я пробувала. Результатом я більш ніж задоволена, 
                        а професійні та чуйні фахівці клініки проводять процедуру максимально комфортно для клієнта.
                        Окреме спасибі косметологу Ганні!</p>                        
                    </li>
                </ul>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <!-- ЗАЯВКА -->
        <a id="request"></a>
        <div class="request">
            <div class="container">
                <div class="row">
                    <div class="text col-6">
                            <h2>Залиште Вашу заявку</h2>
                            <form action="">
                                <input type="text" placeholder="Ваше ім'я">
                                <input type="tel" placeholder="Ваш номер">
                                <input type="text" placeholder="Коментар">
                            </form>
                        <div>
                        <a class="btn" href="">Відправити заявку</a> 
                        <p class="policy-text">Натискаючи кнопку "Надіслати заявку", ви погоджуєтесь з політикою конфіденційності.</p>
                        </div>
                    </div>
                    <div class="crop-box col-6"><img src="images/Mask group (2).png" alt="image"></div>
                </div>
            </div>
       </div>
<?php get_footer(); ?>