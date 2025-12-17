<?php
// Kết nối database
$conn = new mysqli("MYSQL_HOSTNAME", "MYSQL_USERNAME", "MYSQL_PASSWORD", "demo_shop");
$conn->set_charset("utf8mb4");

if ($conn->connect_error) {
    die("Lỗi kết nối CSDL: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Mini Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>🛒 Mini Shop</h1>
    <table>
        <tr>
            <th>Sản phẩm</th>
            <th>Giá (VNĐ)</th>
            <th>Số lượng</th>
        </tr>
        <?php
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "<td>".$row['quantity']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
