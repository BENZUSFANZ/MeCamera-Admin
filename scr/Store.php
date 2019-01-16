<?php
  include 'libs/connectDB.php';
?>

<div class="row">
  <div class="col-sm-3 " style="padding: 20px ; font-size: 23px" >สมาชิกผู้ปล่อยเช่า</div>
  <div class="col-sm-9" ></div>
</div>

<?php
    $sql = "SELECT * FROM tb_user INNER JOIN tb_credit ON tb_user.id_user = tb_credit.user_fk ";
    $result =  $connection->query($sql);

    $sum = mysqli_num_rows($result);
?>

<div class="row ">
  <div class="col-sm-8"></div>
  <div class="col-sm-4" style="padding: 10px; font-size: 18px">สมาชิกผู้ปล่อยเช่าในระบบทั้งหมด <?php echo $sum ?> คน</div>
</div>

<table class="table table-striped" style="padding-top: 50px ">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th scope="col">วันเกิด</th>
      <th scope="col">อีเมล</th>
      <th scope="col">โทร</th>
      <th scope="col">ชื่อร้าน</th>
      <th scope="col">ประเภทร้าน</th>
      <th scope="col">ที่อยู่</th>
    </tr>
  </thead>
  <tbody>
<?php
      while ($row=mysqli_fetch_row($result)) {?>

        <tr>
            <th scope="row"> <?= $row['0'] ?></th>
            <td><?= $row['1'] ?></td>
            <td><?= $row['2'] ?></td>
            <td><?= $row['3'] ?></td>
            <td><?= $row['4'] ?></td>
            <td><?= $row['5'] ?></td>
            <td><?= $row['13'] ?></td>
            <td><?= $row['14'] ?></td>
            <td><?= $row['15'] ?></td>
          </tr>
          <?php
    }?>
    </tbody>
</table>
