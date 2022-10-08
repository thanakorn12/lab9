<?php include "connect.php"?>
<html>
    <head><meta charset="utf-8">
        <script>
            function confirmDelete(name){
                console.log(name);
                var ans = confirm("ต้องการลบสินค้ารหัส" + name);
                if(ans==true)
                    document.location = "delete.php?name=" + name;
            }
        </script>
    </head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();

            while($row = $stmt->fetch()) {
                echo "ชื่อ :".$row["name"]."<br>";
                echo "ที่อยู่ :".$row["address"]."<br>";
                echo "อีเมลล์ :".$row["email"]."<br>";
                echo "<a href='delete.php?username=".$row["username"]."'>ลบ</a>";
                echo "<hr>\n";
            }
        ?>
    </body>
</html>