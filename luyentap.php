<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action="luyentap_form.php" method="get">
            <label for="">Họ và tên</label>
            <input type="text" name="name"><br>
            <label for="">Email</label>
            <input type="email" name="email" id=""><br>
            <label for="">Ngày sinh</label>
            <input type="date" name="time" id=""><br>
            <label for="">Giới tính</label>
            <select name="gender" id="">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select><br>
            <label for="">Trạng thái</label>
            <input type="radio" name="desc" id="" value="Kích hoạt">Kích hoạt
            <input type="radio" name="desc" id="" value="Không kích hoạt">Không kích hoạt<br>
                <button type="submit">Login</button>
        </form>
    </main>
</body>
</html>