<!-- Method POST sẽ gửi dữ liệu thẳng từ form sang 
file trong action mà không thông qua đường dẫn trình duyệt như GET -->

<h1>Form khảo sát sản phẩm</h1>
<form action="tnyc_form_post.php" method="POST">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name"><br>
            <label for="">Giá sản phẩm</label>
            <input type="number" name="price" id=""><br>
            <label for="">Mô tả</label>
            <input type="text" name="desc" id=""><br>
            <label for="">Số lượng tồn kho</label>
            <input type="number" name="so_ton_kho" id="">
            <button type="submit">Login</button>
</form>