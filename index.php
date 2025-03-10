<?php
  include '../portofolio/config.php';

  if (isset($_POST['send'])) {
    $username = $_POST['nama'];
    $email = $_POST['email'];
    $send_massage = $_POST['pesan'];

    $sql = "INSERT INTO contact (name, email, pesan) VALUES ('$username', '$email', '$send_massage')";

    if ($db->query($sql)) {
      echo "<script>alert('Massage Sent!!');
      window.location.href = '#home';</script>";
    } else {
      echo "<script>alert('Massage Sent!!');
      window.location.href = '#contact';</script>";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shelma Karimna</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About Me</a></li>
      <li><a href="#eduskil">Education & Skills</a></li>
      <li><a href="#portofolio">Portofolio</a></li>
      <li><a href="#contact">Contact Me</a></li>
    </ul>
  </nav>

  <section class="home" id="home">
    <div class="content-home">
      <h1>HELLO, I'M SHELMA KARIMNA</h1>
      <p>Saya siswa dari SMK Telkom Purwokerto || kelas X PPLG 1</p>
      <button><a href="#contact">Contact Me</a>
      </button>
    </div>
    <img src="home.png" alt="">
  </section>

  <section class="about" id="about">
      <h1>About Me</h1>
      <div class="content-about">
        <img src="profile.jpg">
        <p>Halo! Saya seorang pelajar SMK dengan jurusan Pengembangan Perangkat Lunak dan Gim (PPLG). Saya memiliki minat besar dalam dunia teknologi, khususnya dalam pemrograman, pengembangan aplikasi, dan desain sistem. Saat ini, saya sedang mendalami berbagai bahasa pemrograman seperti Html, Css, dan JavaScript untuk mengasah keterampilan saya di bidang software development Saya juga senang mengeksplorasi dunia UI/UX, serta memahami cara kerja backend dan frontend dalam pengembangan aplikasi. Selain itu, saya suka tantangan dalam menyelesaikan masalah coding dan terus belajar untuk meningkatkan keterampilan saya.</p>
      </div>
  </section>

  <section class="eduskil" id="eduskil">
    <h1>Education & Skills</h1>
    <div class="education">
      <h3>EDUCATION</h3>
      <div class="content-education">
        <div class="education-card">
          <h3>TK Al-Mansyuroh</h3>
          <p>Mujur, Kec. Kroya, Kabupaten Cilacap, Jawa Tengah</p>
        </div>
        <div class="education-card">
          <h3>SD Negeri 2 Bangsa</h3>
          <p>Jalan Palwolu Desa, RT.05/RW.02, Karangglik, Bangsa, Kec. Kebasen, Kabupaten Banyumas, Jawa Tengah</p>
        </div>
        <div class="education-card">
          <h3>SMP Negeri 1 Sampang</h3>
          <p>Jl. Tugu Timur No.34, Sampang Utara, Sampang, Kec. Sampang, Kabupaten Cilacap, Jawa Tengah</p>
        </div>
        <div class="education-card">
          <h3>SMK Telkom Purwokerto</h3>
          <p>Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah</p>
        </div>
      </div>
    </div>
    <div class="skills">
      <h3>SKILLS</h3>
      <div class="content-skills">
        <li><i class='bx bxl-html5'></i></li>
        <li><i class='bx bxl-figma' ></i></li>
        <li><i class='bx bxl-css3' ></i></li>
      </div>
    </div>
  </section>

  <section class="portofolio" id="portofolio">
    <h1>Portofolio</h1>
    <div class="content-portofolio">
      <li><img src="adobe.png" alt=""></li>
      <li><img src="vector.png" alt=""></li>
    </div>
  </section>

  <section class="contact" id="contact">
    <h1>Contact Me</h1>
    <div class="content-contact">
      <form action="">
        <p>Name : <input></p>
        <p>Email : <input type="email"></p>
        <p>Your Message... <br><textarea name="Your Message.." id=""></textarea></p>
        <button><a href="#">Submit</a></button>
      </form>
    </div>

      <section class="footer">
        <p>&copy; 2025 Shelma Karimna. All rights reserved</p>
        <a href="https://github.com/shelmakarimna/PTS2025" target="_blank">
          <i class='bx bxl-github'></i>
        </a>
        <a href="https://www.instagram.com/selselmaa_?igsh=MTlrYzk3ZnkyaThrZA==" target="_blank">
          <i class='bx bxl-instagram'></i>
        </a>
        <a href="https://www.linkedin.com/in/shelma-karimna-758499353/" target="_blank">
          <i class='bx bxl-linkedin-square' ></i>
        </a>
      </section>
  </section>
  
  <script src="script.js"></script>
</body>
</html>