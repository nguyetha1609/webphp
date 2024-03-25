<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <form method="post">
        <table border="1">
            <tr>
                <td class="header" colspan="2">
                    <b>Đăng ký thời khóa biểu</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Giảng đường: </label>
                </td>
                <td>
                    <select name="txtgd" id="">
                        <option value="GĐ 501">GĐ 501</option>
                        <option value="GĐ 502">GĐ 502</option>
                        <option value="GĐ 503"> GĐ 503</option>
                     </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tên giảng viên: </label>
                </td>
                <td>
                    <input type="text" name = "txtname">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Môn dạy: </label>
                </td>
                <td>
                    <select name="txtmd" id="">
                        <option value="">PHP</option>
                        <option value="">C#</option>
                        <option value="">Java</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="submit" colspan="2">
                    <input type="submit" value="Đăng Ký"  name="txtsub" >
                </td>
            </tr>
        </table>
    </form>
    <?php
    // Recall connect file
        include ('connect.php');
        class data_giangduong{
            public function insert_gd($tengv, $tengd, $tenmd){
                global $conn;
                $sql = "INSERT INTO giangduong(giaovien, giangduong,monday) values ('$tengv', '$tengd','$tenmd')";
                $run = mysqli_query($conn,$sql);
                return $run;
            }
        }

        include ('control.php');
        $gd = new data_giangduong();
        if(isset($_POST['txtsub'])){
            $in_gd = $gd -> insert_gd($_POST['txtname'],$_POST['txtgd'],$_POST['txtmd']);
            if($in_gd) {echo "<script>alert('Thành công'); </script>";}
            else {echo "<script>alert('Không thực thi được'); </script>";}
        }
    ?>
</body>
</html>