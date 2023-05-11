<div class="row mb" >
    <div class="boxtrai mr" >
    <div class="row mb">
        <div class="boxtitle">Đăng ký tài khoản</div>
        <div class="row boxcontent">
            <form action="index.php?act=dangky" method="post">
                Email          <br>
                <input type="email" name="email"> <br>
                Tên đăng Nhập  <br>
                <input type="text" name="user"> <br>
                Mật khẩu       <br>
                <input type="password" name="pass"> <br>
                <input type="submit" value="Đăng ký" name="dangky">
                <input type="reset" value="Nhập lại">
            </form>
            <?php
            if (isset($thongbao)&&($thongbao!="")) {
                echo $thongbao;
            }
            ?>
        </div>

    </div>

    </div>
    <div class="boxphai">
        
        <?//php include "boxright.php"; ?>
    </div>
</div>