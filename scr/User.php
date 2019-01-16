<?php
  include 'libs/connectDB.php';
?>
  <div class="row">
    <div class="col-sm-3 " style="padding: 20px ; font-size: 23px" >สมาชิกในระบบ</div>
    <div class="col-sm-9" ></div>
  </div>

  <?php
      $sql = "SELECT *  FROM tb_user ";
      $result =  $connection->query($sql);

      $sum = mysqli_num_rows($result);
  ?>

  <div class="row ">
    <div class="col-sm-8"></div>
    <div class="col-sm-4" style="padding: 10px; font-size: 18px">สมาชิกในระบบทั้งหมด <?php echo $sum ?> คน</div>
  </div>

<table class="table table-striped " style="padding-top: 50px ">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">นามสกุล</th>
      <th scope="col">วันเกิด</th>
      <th scope="col">อีเมล</th>
      <th scope="col">โทร</th>
    </tr>
  </thead>
  <tbody>
<?php
      while ($row=mysqli_fetch_array($result)) {?>

        <tr>
            <th scope="row"> <?= $row['id_user'] ?></th>
            <td><?= $row['name'] ?></td>
            <td><?= $row['last_name'] ?></td>
            <td><?= $row['birth'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['tel'] ?></td>
          </tr>
          <?php
    }?>
    </tbody>
</table>
