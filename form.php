<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>
<body>
    <header>
        HEADER
    </header>
    <main>
        <!-- name trong input là để làm key lấy dữ liệu
             action ở form là nơi tiếp nhận dữ liệu
             khi action để trống thì chính là file -->
        <form action="tnyc_form.php" method="get">
            <label for="">Username</label>
            <input 
                type="text" 
                placeholder="username"
                name="user_name"
                > 
            <label for="">Password</label>
            <input 
                type="password" name="pass_word" id="" 
                placeholder="password"
                >
            <button type="submit">Login</button>
        </form>
    </main>
    <footer>
        FOOTER
    </footer>
</body>
</html>