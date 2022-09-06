<?php
  require_once "header.php";
?>
<div class="startContent" onclick="location.href='aq.php'">
  <h1>Aq Tolkyn Garden</h1>
</div>
<div class="feedback">
  <form action="./app/feedback.php?path=aq" method="POST" class="feedBack">
    <h3>Оставить заявку</h3>
      <input type="text" class="inp" id="name" name="name" placeholder="Имя">
      <input type="text" id="phone" name="phone" class="inp" placeholder="Номер телефона">
    <button class="btn">Отправить</button>
  </form>
</div>
<div class="center">
    <div class="minlogo">
      <img src="./public/imgs/logos/aq.png" style="height: 50px;">
    </div>
    <div class="imgProduct">
      <img src="./public/imgs/products/aq.jpg" style="height: 30vh;">
    </div>
    <div class="text">
        <h1>О ЖИЛОМ КОМПЛЕКСЕ</h1>
        <p>"ЖК AQTOLKYN Garden " - ультрасовременный ЖК бизнес-класса.</p>
        <br>
        <p>Расположен в старом центре города Алматы.</p>
        <p>На пересечение улиц Аль фараби и Ходжанова.</p>
        <br><br>
        <h1>Застройщик данного ЖК - "Dial Stroy"</h1>
        <p>"Диал-Строй" - одна из лидирующих и динамично развивающихся строительных организаций Казахстана, которая работает на строительном рынке с 2004 года. За 12 лет деятельности "Диал-Строй" возвел 150 000 квадратных метров жилых комплексов, административных зданий и социальных заведений. В период с 2004 по 2012 гг. в лице "Субподрядчика" нами построено более 80 000 квадратных метров, в период с 2012 года по настоящее время в лице "Генподрядчика" построено 25 000 квадратных метров в городе Алматы.</p>
    </div>
    <div class="imgs">
        <img src="./public/imgs/aq/1.jpg">
        <img src="./public/imgs/aq/2.jpg">
        <img src="./public/imgs/aq/3.jpg">
        <img src="./public/imgs/aq/4.jpg">
        <img src="./public/imgs/aq/5.jpg">
        <img src="./public/imgs/aq/6.jpg">
        <img src="./public/imgs/aq/7.jpg">
        <img src="./public/imgs/aq/8.jpg">
        <img src="./public/imgs/aq/9.jpg">
        <img src="./public/imgs/aq/10.jpg">
    </div>
</div>

<footer>
  <span class="copyright">Lpride.kz © 2022</span>
</footer>
</body>
</html>