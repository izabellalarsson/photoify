<nav class="navbar">
  <a class="navbar-brand" href="#"><?php echo $config['title']; ?></a>

  <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" href="./index.php">Home</a>
      </li><!-- /nav-item -->

      <li class="nav-item">
          <a class="nav-link" href="./about.php">About</a>
      </li><!-- /nav-item -->
      <?php if (!isset($_SESSION['user'])) :?>
      <li class="nav-item">
          <a class="nav-link" href="./login.php">Login</a>
      </li>
  <?php else : ?>
      <li class="nav-item">
          <a class="nav-link" href="./app/users/logout.php">Log Out</a>
      </li>
    <?php endif; ?>
  </ul><!-- /navbar-nav -->
</nav><!-- /navbar -->
