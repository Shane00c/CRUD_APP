<?php
include 'config.php';
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $conn->query("UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit User</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>Edit User</h2>
  <form method="POST">
    <div class="mb-3">
      <label>Name:</label>
      <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Email:</label>
      <input type="email" name="email" value="<?= $row['email'] ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Phone:</label>
      <input type="text" name="phone" value="<?= $row['phone'] ?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-warning">Update</button>
    <a href="index.php" class="btn btn-secondary">Cancel</a>
  </form>
</body>
</html>
