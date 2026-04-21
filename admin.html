<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<title>لوحة التحكم</title>

<style>
:root {
  --bg: linear-gradient(135deg, #eef2ff, #f8fafc);
  --card: #ffffff;
  --accent: #6366f1;
  --accent-dark: #4f46e5;
  --text: #111827;
  --muted: #6b7280;
  --radius: 16px;
  --shadow: 0 10px 30px rgba(99,102,241,0.15);
}

body {
  margin: 0;
  font-family: "Cairo", sans-serif;
  background: var(--bg);
  color: var(--text);
}

/* الهيدر */
header {
  text-align: center;
  padding: 20px;
  background: rgba(255,255,255,0.8);
  backdrop-filter: blur(10px);
  box-shadow: var(--shadow);
}

h1 {
  margin: 0;
  color: var(--accent);
}

/* الحاوية */
.container {
  max-width: 1000px;
  margin: 30px auto;
  padding: 20px;
}

/* كارد */
.card {
  background: var(--card);
  border-radius: var(--radius);
  box-shadow: var(--shadow);
  padding: 20px;
  margin-bottom: 25px;
}

/* الفورم */
input {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  border-radius: var(--radius);
  border: 1px solid #ddd;
  font-size: 14px;
}

input:focus {
  outline: none;
  border-color: var(--accent);
  box-shadow: 0 0 6px rgba(99,102,241,0.3);
}

button {
  width: 100%;
  padding: 12px;
  background: var(--accent);
  color: #fff;
  border: none;
  border-radius: var(--radius);
  font-size: 15px;
  cursor: pointer;
  transition: 0.3s;
}

button:hover {
  background: var(--accent-dark);
}

/* المنتجات */
.product {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #fff;
  border-radius: var(--radius);
  padding: 10px 15px;
  margin-bottom: 10px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.product img {
  width: 60px;
  height: 60px;
  object-fit: cover;
  border-radius: 10px;
  margin-left: 10px;
}

.product-info {
  flex: 1;
}

.product-info p {
  margin: 3px 0;
}

.delete-btn {
  background: #ef4444;
  color: #fff;
  padding: 8px 12px;
  border-radius: 10px;
  text-decoration: none;
  font-size: 13px;
  transition: 0.3s;
}

.delete-btn:hover {
  background: #dc2626;
}









.modal {
  display: none;
  position: fixed;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
  justify-content: center;
  align-items: center;
  z-index: 9999;
}

.modal-content {
  background: #fff;
  padding: 25px;
  border-radius: 16px;
  width: 320px;
  text-align: center;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  animation: pop 0.3s ease;
}

@keyframes pop {
  from { transform: scale(0.7); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

.modal h2 {
  color: #ef4444;
  margin-bottom: 10px;
}

.buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

button {
  padding: 10px 15px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

.danger {
  background: #ef4444;
  color: white;
}

.cancel {
  background: #e5e7eb;
}








</style>
</head>

<body>

<header>
  <h1>لوحة التحكم</h1>
</header>

<div class="container">

  <!-- إضافة منتج -->
  <div class="card">
    <h2>إضافة منتج</h2>

  <form action="add.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">

  <!-- الاسم -->
  <input type="text" name="name" id="name" placeholder="اسم المنتج"
    pattern="[A-Za-z\u0600-\u06FF\s]+"
    title="يجب إدخال حروف فقط"
    required>

  <!-- السعر -->
  <input type="text" name="price" id="price" placeholder="السعر"
    inputmode="numeric"
    pattern="[0-9]+"
    title="أرقام فقط"
    required>

  <!-- اسم الطالب -->
  <input type="text" name="student" id="student" placeholder="اسم الطالب"
    pattern="[A-Za-z\u0600-\u06FF\s]+"
    title="حروف فقط"
    required>

  <!-- رقم الجوال -->
  <input type="text" name="phone" id="phone" placeholder="05xxxxxxxx"
    inputmode="numeric"
    maxlength="10"
    pattern="05[0-9]{8}"
    title="يجب أن يبدأ بـ 05 ويتكون من 10 أرقام"
    required>

  <input type="file" name="image" required>

  <button type="submit">إضافة المنتج</button>
</form>
  </div>

  <!-- عرض المنتجات -->
  <div class="card">
    <h2>المنتجات</h2>

    <?php
    include "db.php";

    $result = $conn->query("SELECT * FROM products ORDER BY id DESC");

    while($row = $result->fetch_assoc()){
    echo "
<div class='product'>
  <img src='uploads/{$row['image']}'>

  <div class='product-info'>
    <p><strong>{$row['name']}</strong></p>
    <p>{$row['price']} ريال</p>
    <p>{$row['student']}</p>
  </div>

  <a class='delete-btn' href='#' onclick=\"confirmDelete(event, 'delete.php?id={$row['id']}')\">حذف</a>
</div>
";
    }
    ?>

  </div>

</div>








<script>
// أرقام فقط
document.getElementById("price").addEventListener("input", function() {
  this.value = this.value.replace(/[^0-9]/g, "");
});

document.getElementById("phone").addEventListener("input", function() {
  this.value = this.value.replace(/[^0-9]/g, "");
});

// حروف فقط
function onlyLetters(input) {
  input.value = input.value.replace(/[^a-zA-Z\u0600-\u06FF\s]/g, "");
}

document.getElementById("name").addEventListener("input", function() {
  onlyLetters(this);
});

document.getElementById("student").addEventListener("input", function() {
  onlyLetters(this);
});

// تحقق نهائي قبل الإرسال
function validateForm() {
  const phone = document.getElementById("phone").value;

  if (!/^05\d{8}$/.test(phone)) {
    alert("رقم الجوال يجب أن يبدأ بـ 05 ويتكون من 10 أرقام");
    return false;
  }

  return true;
}












window.onload = function () {

  let deleteUrl = "";

  window.confirmDelete = function (event, url) {
    event.preventDefault();
    deleteUrl = url;
    document.getElementById("deleteModal").style.display = "flex";
  }

  window.closeModal = function () {
    document.getElementById("deleteModal").style.display = "none";
  }

  document.getElementById("confirmBtn").onclick = function () {
    window.location.href = deleteUrl;
  };

};

















</script>





<!-- نافذة الحذف -->
<div id="deleteModal" class="modal">
  <div class="modal-content">
    <h2>تأكيد الحذف</h2>
    <p>هل أنت متأكد أنك تريد حذف هذا المنتج؟</p>

    <div class="buttons">
      <button id="confirmBtn" class="danger">حذف</button>
      <button onclick="closeModal()" class="cancel">إلغاء</button>
    </div>
  </div>
</div>

</body>
</html>
