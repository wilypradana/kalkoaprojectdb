<?php 
require("../koneksi.php");
$ppts = queryppt("SELECT * FROM `ppt_table`");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template PPT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top: 90px;">
        <div class="row">
            <?php foreach($ppts as $ppt) : ?>
          <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
            <div class="card">
              <img src="../../../../assets/ppt/<?=  $ppt["image"] ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">template ppt</h5>
                <p class="card-text">ubah link mati dan delete jika kena copyright</p>
                <a href="../delete/hapus.php?id=<?=  $ppt["id"] ?>&table=ppt_table" class="btn btn-warning">delete</a>
                <a href="../ubah/ubah.php?id=<?=  $ppt["id"] ?>" class="btn btn-success">edit</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <!-- Repeat the above code for the remaining cards -->

      </div>
      <div class="position-fixed bottom-0 end-0 p-3">
        <a href="dashboard.html" class="btn btn-primary rounded-circle">
            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
              </svg>
              
              Home
              </span>
        </a>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>
</html>