<?php
  require_once "header.php";
?>
<style>
.startContent {
  height: calc(100vh - 50px);
  margin-bottom: 15px;
  background: url("./public/imgs/products/dealresidence.jpeg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
}
</style>
<div class="startContent">
  <h1>Dial Residence</h1>
</div>
<div class="feedback">
  <form action="./app/feedback.php?path=dealresidence" method="POST" class="feedBack">
    <h3>Оставить заявку</h3>
      <input type="text" class="inp" id="name" name="name" placeholder="Имя">
      <input type="text" id="phone" name="phone" class="inp" placeholder="Номер телефона">
    <button class="btn">Отправить</button>
  </form>
</div>
<div class="center">
    <div class="minlogo">
      <img src="./public/imgs/logos/dealresidence.png" style="height: 50px;">
    </div>
    <div class="imgProduct">
      <img src="./public/imgs/products/dealresidence.jpeg" style="height: 30vh;">
    </div>
    <div class="text">
        <h1>О ЖИЛОМ КОМПЛЕКСЕ</h1>
        <p>"Dial Residence" - ультрасовременный ЖК бизнес-класса.</p>
        <br>
        <p>Расположен в старом центре города Алматы.</p>
        <p>На пересечение улиц Казбек би и Сейфуллина.</p>
        <br><br>
        <h1>Застройщик данного ЖК - "Dial Stroy"</h1>
        <br>
        <button onclick="location.href = 'https:\/\/www.youtube.com/watch?v=bpt3DqbvqnE'">Посмотреть видео</button>
        <br>
        <button onclick="location.href = 'https:\/\/drive.google.com/file/d/1foIzPN1p-k0My4Uyo0jYb3D15wP3Rcm1/view'">Презинтация</button>
        <br>
        <p>"Диал-Строй" - одна из лидирующих и динамично развивающихся строительных организаций Казахстана, которая работает на строительном рынке с 2004 года.</p>
        <br>
        <p>За 12 лет деятельности "Диал-Строй" возвел 150 000 квадратных метров жилых комплексов, административных зданий и социальных заведений. В период с 2004 по 2012 гг. в лице "Субподрядчика" нами построено более 80 000 квадратных метров, в период с 2012 года по настоящее время в лице "Генподрядчика" построено 25 000 квадратных метров в городе Алматы.</p>
    </div>
    <div class="imgs">
        <img src="./public/imgs/dealresidence/1.jpg">
        <img src="./public/imgs/dealresidence/2.jpg">
        <img src="./public/imgs/dealresidence/3.jpg">
        <img src="./public/imgs/dealresidence/4.jpg">
        <img src="./public/imgs/dealresidence/5.jpg">
    </div>
</div>

<footer>
  <span class="copyright">Lpride.kz © 2022</span>
</footer>
</body>
</html>