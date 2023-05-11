<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql="INSERT INTO sanpham(name,gia,img,mota,iddm) VALUES('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="DELETE  FROM sanpham WHERE id=".$id;
    pdo_query($sql);
}
function loadall_sanpham($kyw,$iddm){
    $sql="SELECT * FROM sanpham where 1"; 
    if ($kyw!="") {
        $sql.=" and name like '&".$kyw."&'";
    }
    if ($iddm>0) {
        $sql.=" and iddm = '".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql="SELECT * FROM sanpham WHERE id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
    $sql="UPDATE sanpham SET iddm='".$iddm."', name='".$tensp."', price='".$giasp."', mota='".$mota."', img='".$hinh."'WHERE id=".$id;
    else 
    $sql="UPDATE sanpham SET iddm='".$iddm.", name='".$tensp."', price='".$giasp."', mota='".$mota."' WHERE id=".$id;
    pdo_execute($sql);
}

?>