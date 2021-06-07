<!doctype html>
<?php session_start(); ?>    

<html lang="en">
   <meta charset="UTF-8">
   <title>Robert Flarity's Bio</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="home.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h4 class="masthead-brand">CEN 4010 Group 10</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="index.php"><- Back to Home</a>
        <!--<a class="nav-link" href="collection.php">Collection</a>
        <a class="nav-link" href="about.php">About</a>-->
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">Robert Flarity</h1>
    <img src="bio-image.jpg" id="bio-pic">
    <p class="lead">Robert is a Computer Science major currently studying at Florida Atlantic University. He works full-time as a web development intern at Paperstreet Web Design as both a means of income and another way to advance his knowldege into the subject. His tasks primarily focus on supporting the development and support teams while occaionally helping the SEO team with google analytics edits.
    </p>
    <h4>List of Language Experience:</h4>
    <ul>
      <li>C++  - Basic</li>
      <li>HTML - Intermediate</li>
      <li>PHP  - Intermediate</li>
      <li>Javascript  - Basic</li>
    </ul>
    <p class="lead">
      Portfolio page currently under construction!
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
    <?php //include "footer.php" ?>
    </div>
  </footer>
</div>
