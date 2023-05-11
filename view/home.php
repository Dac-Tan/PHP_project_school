<div id="banner">
             <div class="logo">
                <img src="img/10-do-an-vat-dep-1-1.jpg" alt="">
            </div>
            <div class="box-left">
                <h2>
                    <span>FAST FOOD</span>
                    <br>  
                </h2>
                <p> Đời có nhiều lúc vui mà cũng có đầy lúc không vui lắm, nhưng vậy thì đã sao?
                    Thưởng cho mình một bữa ăn ngon bên bạn bè, bên những người thân yêu tại nhà hàng của chúng mình nào! Ăn xong chắc chắn bạn sẽ yêu đời hơn rất nhiều đấy ạ!</p>
                <button>Đặt hàng ngay</button>
            </div>
        </div>
        <div class="row mb center">
        <div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                        ?>
                             <div class="row mb10">
                                Xin chào <br>
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                            <li>
                            <a href="#">Cập nhật tài khoản</a>
                        </li>
                        <li>
                            <a href="index.php?act=edit_taikhoan">Đổi mật khẩu</a>
                        </li>
                        <li>
                            <a href="admin/index.php">Đăng nhập trang admin</a>
                        </li>
                        <li>
                            <a href="index.php?act=thoat">Đăng xuất</a>
                        </li>
                            </div>
                        <?php   
                            }else{                     
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                            <input type="text" name="user" id=""> <br>
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                            <input type="text" name="pass" id="" > <br>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id=""> ghi nhớ tài khoản <br>
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap"> <br>
                            </div>
                            
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu?</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký?</a>
                        </li>
                        <?php } ?>
                    </div>
                </div>
        <div class="row mb  ">
            <div class="boxtrai mr">
                <h1>
                    Món ăn yêu thích
              </h1>
                <div class="row">
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="img/raumuong.jfif" alt="">
                        </div>
                        <p>15.000.000đ</p>
                        <a href="#">Thịt bò rán</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="img/raumuong.jfif" alt="">
                        </div>
                        <p>15.000.000đ</p>
                        <a href="#">Xiên bẩn</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img">
                            <img src="img/raumuong.jfif" alt="">
                        </div>
                        <p>15.000.000đ</p>
                        <a href="#">Xiên sạch</a>
                    </div>
                    <h1>
                        Món hơi yêu thích
                  </h1>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="img/raumuong.jfif" alt="">
                        </div>
                        <p>15.000.000đ</p>
                        <a href="#">Xiên hơi bẩn</a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="img/raumuong.jfif" alt="">
                        </div>
                        <p>15.000.000đ</p>
                        <a href="#">Nước ép lòng heo</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img">
                            <img src="img/raumuong.jfif" alt="">
                        </div>
                        <p>15.000.000đ</p>
                        <a href="#">Nước mắt tuôn rơi</a>
                    </div>
                    <h1>
                        Món ăn khum thích 
                  </h1>
                    <div class="boxsp ">
                        <div class="row img">
                            <img src="img/raumuong.jfif" alt="">
                        </div>
                        <p>15.000.000đ</p>
                        <a href="#">Lòng se điếu</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img">
                            <img src="img/raumuong.jfif" alt="">
                        </div>
                        <p>15.000.000đ</p>
                        <a href="#">Bún đậu mắm Nam Ngư</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img">
                            <img src="img/raumuong.jfif" alt="">
                        </div>
                        <p>15.000.000đ</p>
                        <a href="#">Rau muống xào tỏi</a>
                    </div>
                </div>
            </div>
       </div> 