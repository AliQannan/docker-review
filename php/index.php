<?php
// الاتصال بقاعدة البيانات
$servername = "mysql";
$username = "user";       // نفس الموجود في .env
$password = "user123";    // نفس الموجود في .env
$database = "projectdb";  // نفس الموجود في .env

$conn = new mysqli($servername, $username, $password, $database);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// جلب البيانات
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users List</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>

<h1>Users List</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>

    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["email"] ?></td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">No data found.</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
