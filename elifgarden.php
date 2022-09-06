<?php
  require_once "header.php";
?>
<style>
.startContent {
  height: calc(100vh - 50px);
  margin-bottom: 15px;
  background: url("./public/imgs/products/elifgarden.jpeg");
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
  <h1>Elif Garden</h1>
</div>
<div class="feedback">
  <form action="./app/feedback.php?path=elifgarden" method="POST" class="feedBack">
    <h3>Оставить заявку</h3>
      <input type="text" class="inp" id="name" name="name" placeholder="Имя">
      <input type="text" id="phone" name="phone" class="inp" placeholder="Номер телефона">
    <button class="btn">Отправить</button>
  </form>
</div>
<div class="center">
    <div class="minlogo">
      <img src="./public/imgs/logos/ElifGarden.png" style="height: 50px;">
    </div>
    <div class="imgProduct">
      <img src="./public/imgs/products/elifgarden.jpeg" style="height: 30vh;">
    </div>
    <div class="text">
        <h1>О ЖИЛОМ КОМПЛЕКСЕ</h1>
        <p>"ELIF GARDEN" - ультрасовременный ЖК бизнес-класса.</p>
        <br>
        <p>Расположен в старом центре города Алматы.</p>
        <p>На пересечение улиц Сатпаева и Розыбакиева.</p>
        <br>
        <button onclick="location.href = 'https:\/\/drive.google.com/file/d/1YCRUx7XzDXy3vtg1ob_3ycQrlyDHu8Gl/view'">Презентация</button>
        <br>
        <button onclick="location.href = 'https:\/\/www.youtube.com/watch?v=MNMSTI0LJAw'">Посмотреть видео</button>
        <br><br>
        <h1>Застройщик данного ЖК - "GAB Сonstruction"</h1>
        <br>
        <p>ТОО «GAB Construction» успешно работает на рынке строительных услуг с 2004 года и имеет 1 категорию лицензии на строительно-монтажные работы. Мы строим жилые комплексы бизнес и элит класса в центральной и верхних частях Алматы по программе ветхое жилье. Каждому клиенту гарантируем: Выполнения работ в договоренные сроки Профессиональное выполнение работ (Опыт работ в сфере строительных услуг наших сотрудников более 20 лет) Принцип работы: Оперативность, Надежность, Уверенность</p>
        <br>
    </div>
    <div class="imgs">
        <img src="./public/imgs/elifgarden/1.jpg">
        <img src="./public/imgs/elifgarden/2.jpg">
        <img src="./public/imgs/elifgarden/3.jpg">
        <img src="./public/imgs/elifgarden/4.jpg">
        <img src="./public/imgs/elifgarden/5.jpg">
        <img src="./public/imgs/elifgarden/6.jpg">
    </div>
</div>

<footer>
  <span class="copyright">Lpride.kz © 2022</span>
</footer>
</body>
</html>