<?php include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $conn->query("INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add User</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
  <h2>Add New User</h2>
  <form method="POST">
    <div class="mb-3">
      <label>Name:</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Email:</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Phone:</label>
      <input type="text" name="phone" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Add User</button>
    <a href="index.php" class="btn btn-secondary">Cancel</a>
  </form>
</body>
</html>
