<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>     
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
                        $query1 = mysqli_query($sambungan, "SELECT * FROM users")
                        or die(mysqli_error($sambungan));
                        $pickid = mysqli_fetch_array($query1);
                        $id_user = $pickid['id_user'];
                        $query2 = mysqli_query($sambungan, "SELECT * FROM keluhan WHERE status_keluhan='Belum ditanggapi'")
                        or die(mysqli_error($sambungan));
                        while($data = mysqli_fetch_array($query2)){
                            $encrypted = $data['deskripsi_keluhan'];
                            $method = "aes-256-cbc";
                            $key = $data['key'];
                            $iv = str_repeat(0x0, 16);
                            $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);
                        ?>
                        <tr>
                          <td style="color:#fff;"><?php echo $data['id_keluhan']; ?></td>
                          <td style="color:#fff;"><?php echo $data['id_user']; ?></td>
                          <td style="color:#fff;"><?php echo str_rot13($decrypted); ?></td>
                          <td style="color:#fff;"><?php echo $data['tanggal']; ?></td>
                          <td style="color:#fff;"><?php echo $data['status_keluhan']; ?></td>
                        </tr><?php
                        }?>