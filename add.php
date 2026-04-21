<?php
include "db.php";

// تنظيف البيانات
$name = trim($_POST['name']);
$price = trim($_POST['price']);
$student = trim($_POST['student']);
$phone = trim($_POST['phone']);

// 🔒 تحقق من رقم الجوال
if (!preg_match('/^05[0-9]{8}$/', $phone)) {
    die("رقم الجوال غير صحيح");
}

// 🔒 تحقق من السعر
if (!preg_match('/^[0-9]+$/', $price)) {
    die("السعر يجب أن يكون أرقام فقط");
}

// 🔒 تحقق من الاسم (حروف فقط عربي/انجليزي)
if (!preg_match('/^[\p{L}\s]+$/u', $name)) {
    die("اسم المنتج يجب أن يكون حروف فقط");
}

// 🔒 تحقق من اسم الطالب
if (!preg_match('/^[\p{L}\s]+$/u', $student)) {
    die("اسم الطالب يجب أن يكون حروف فقط");
}

// 📸 رفع الصورة باسم فريد
$imageName = time() . "_" . basename($_FILES['image']['name']);
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp, "uploads/" . $imageName);

// 🧠 إدخال البيانات
$sql = "INSERT INTO products (name, price, student, phone, image)
        VALUES ('$name', '$price', '$student', '$phone', '$imageName')";

if ($conn->query($sql) === TRUE) {
    echo "تمت الإضافة بنجاح";
} else {
    echo "خطأ: " . $conn->error;
}
?>