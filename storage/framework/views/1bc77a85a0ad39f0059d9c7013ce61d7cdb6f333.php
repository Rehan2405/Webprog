<?php $__env->startSection('navbar'); ?>
<head>
  
  <title><?php echo $__env->yieldContent('Navbar'); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Rolling Dice.io</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item jome">
        <a class="nav-link" href="home.blade.php">Home <span class="sr-only">(current)</span></a>
        <li class="nav-item about">
        <a class="nav-link" href="about.blade.php">About</a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Achivement</button>
    </form>
    <!-- <div class="mb-3">
                <label for="inputImage" class="form-label">Dice Image</label>
                <input name="image" class="form-control" type="file" id="formFile">
            </div> -->
  </div>
</nav>
</body>
</html>
<?php /**PATH D:\Binus\Chapter 5\Webprog\Asgn\resources\views/navbar.blade.php ENDPATH**/ ?>