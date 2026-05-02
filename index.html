<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>المتجر الإلكتروني</title>

  <style>
 :root {
  --bg: linear-gradient(135deg, #eef2ff, #f8fafc);
  --card: #ffffff;
  --accent: #6366f1;
  --accent-dark: #4f46e5;
  --text: #111827;
  --muted: #6b7280;
  --radius: 18px;
  --shadow: 0 10px 30px rgba(99,102,241,0.15);
  --whatsapp: #22c55e;
  --border: #e5e7eb;
}

* { box-sizing: border-box; margin: 0; padding: 0; }

body {
  font-family: "Cairo", "Segoe UI", Tahoma, sans-serif;
  background: var(--bg);
  background-attachment: fixed;
  color: var(--text);
}

header {
  background: rgba(255,255,255,0.9);
  backdrop-filter: blur(10px);
  box-shadow: var(--shadow);
  padding: 16px 20px;
  position: sticky;
  top: 0;
  z-index: 100;
}

.header-top {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  margin-bottom: 12px;
}

.header-top h1 {
  color: var(--accent);
  font-size: 22px;
  flex: 1;
  text-align: center;
}

.login-btn {
  background: var(--accent);
  color: #fff;
  padding: 8px 16px;
  border-radius: 12px;
  text-decoration: none;
  font-size: 14px;
  font-family: "Cairo", sans-serif;
  white-space: nowrap;
  transition: background 0.3s;
  flex-shrink: 0;
}

.login-btn:hover {
  background: var(--accent-dark);
}

.search-box {
  text-align: center;
}

.search-box input {
  width: 100%;
  max-width: 450px;
  padding: 10px 16px;
  border-radius: var(--radius);
  border: 1px solid var(--border);
  font-family: "Cairo", sans-serif;
  font-size: 14px;
  outline: none;
}

.container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 25px;
  padding: 40px 20px;
  max-width: 1200px;
  margin: auto;
}

.card {
  background: var(--card);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  overflow: hidden;
}

.image-container {
  height: 200px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f9fafb;
}

.card img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.info {
  padding: 16px;
  text-align: right;
}

.info h2 {
  font-size: 18px;
  margin-bottom: 8px;
}

.info p {
  font-size: 14px;
  color: var(--muted);
  margin-bottom: 4px;
}

.whatsapp-btn {
  display: inline-block;
  margin-top: 12px;
  background: var(--whatsapp);
  color: #fff;
  padding: 10px 20px;
  border-radius: 20px;
  text-decoration: none;
  font-family: "Cairo", sans-serif;
  font-size: 14px;
  transition: background 0.3s;
}

.whatsapp-btn:hover {
  background: #16a34a;
}
  </style>
</head>

<body>

<header>
  <h1>متجر مدارس ابن رشد جازان</h1>

  <div class="search-box">
    <input type="text" id="searchInput" placeholder="ابحث عن منتج..." onkeyup="searchProducts()">
  </div>
</header>

<div class="container" id="productContainer">

<?php
include "db.php";

$result = $conn->query("SELECT * FROM products ORDER BY id DESC");

while($row = $result->fetch_assoc()){

  // تصحيح رقم الجوال (يحذف 0 ويضيف 966)
  $phone = ltrim($row['phone'], '0');
  $whatsapp = "https://wa.me/966$phone?text=مرحباً، أود الاستفسار عن {$row['name']}";

  echo "
  <div class='card'>
    <div class='image-container'>
      <img src='uploads/{$row['image']}'>
    </div>
    <div class='info'>
      <h2>{$row['name']}</h2>
      <div class='price'>السعر: {$row['price']} ريال</div>
      <div class='student'>الطالب: {$row['student']}</div>
      <div class='contact'>رقم التواصل: {$row['phone']}</div>
      <a class='whatsapp-btn' href='$whatsapp' target='_blank'>تواصل عبر واتساب</a>
    </div>
  </div>
  ";
}
?>

</div>

<footer>مطور الموقع أ. مهند صلوي</footer>

<script>
function searchProducts() {
  const input = document.getElementById('searchInput').value.toLowerCase();
  const cards = document.querySelectorAll('.card');

  cards.forEach(card => {
    const name = card.querySelector('h2').textContent.toLowerCase();
    card.style.display = name.includes(input) ? 'block' : 'none';
  });
}
</script>

</body>
</html>
