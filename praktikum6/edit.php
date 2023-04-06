 <?php
     require_once 'dbkoneksi.php';

     if(isset($_GET['id'])){
        $id = $_GET['id'];

      $sql =  "SELECT * FROM pelanggan WHERE id = :id";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);
     }

?>


<form method="post">
    <input type="hidden" name="id" Value="<?= $row['id']  ?>">
    
    <label for="">KODE</label>
    <input type="text" name="kode" value="  <?= $row["kode"] ?>">  <br><br>

    <label for="">NAMA</label>
    <input type="text" name="nama" value="  <?= $row["nama"] ?>">  <br><br>


    <label for="">Jenis Kelamin</label>
    <br>
    <label for="">Laki Laki</label>
    <input type="radio" name="jk" value="L" checked>
    
    <label for=""></label>
    <br>
    <label for="">Perempuan</label>
    <input type="radio" name="jk" value="p">   <br><br>

    <label for="">Tempat Lahir </label>
    <input type="text" name="tmp_lahir" value=" <?= $row['tmp_lahir'] ?> "> <br><br>


    <label for="">Tanggal lahir  </label>
    <input type="date" name="tgl_lahir" value=" <?= $row['tgl_lahir'] ?> ">  <br><br>

    <label for="">Email </label>
    <input type="email" name="email" value=" <?= $row['email'] ?> "> <br><br>


    <label for="">kartu_id </label>
    <input type="text" name="kartu_id" value=" <?= $row['kartu_id'] ?> "> <br><br>


    <button type="submit" name="submit">Save</button>



</form>