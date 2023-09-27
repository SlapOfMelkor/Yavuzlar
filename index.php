
<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: userlogin.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
  <div class="container">
        <a href="userlogout.php" class="btn btn-warning">Logout</a>
    </div>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Yapilacaklar Listesi</title>
  </head>
  <body> 
    <h1 class="text-center py-4 my-4">Yapilacaklar Listesi</h1>

    <div class="w-50 m-auto">
    <form action="data.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="title">Gorev</label>
            <input class="form-control" type="text" name="title" id="title" placeholder="Ekleyeceginiz Gorevi Yaziniz" Required>
        </div><br>
        <button class="btn btn-success">Ekle</button>

    </form>

    </div><br>
    <hr class="bg-dark w-50 m-auto">
    <div class="lists w-50 m-auto my-4">
        <h1>Gorev Listesi</h1>
        <div id="lists">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col" name="id">Gorev Sirasi</th>
      <th scope="col">Gorev</th>
    <th>Islem</th>
    </tr>
  </thead>
  <tbody>
  <?php
        include 'database.php';
        session_start();
        $x=$_SESSION['veri'];
        $sql="SELECT * FROM todos WHERE email= '$x' ";
        $result=mysqli_query($conn, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $title=$row['Title'];
           
                ?>
                <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $title  ?></td>
                    <td>
                    <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $id ?>" role="button">Duzenle</a>
                    <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button">Sil</a>
                    </td>                    
                </tr>
                <?php  
            }
        }
    ?>
  </tbody>
</table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>