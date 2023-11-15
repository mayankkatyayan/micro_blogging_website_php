
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MicroBlog App</title>
  <!--stylesheet-->
  <link rel="stylesheet" href="style.css">
  <!--ICONSCOUT CDN-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

  <!--======GOOGLE FONTS========-->
  <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Roboto:wght@100&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  



</head>
<body>
  <nav>
    <div class="container nav__container">
      <a href="index.html" class="nav__logo">MicroBlog</a>
      <ul class="nav__items">
        <li><a href="blog.html">Blog</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="signin.html">SignIn</a></li>
        <li class="nav__profile">
          <div class="avatar">
            <img src="./Darjeeling Trip/IMG_1679.JPG" alt="no clip">
          </div>
          <ul>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="logout.html">Logout</a></li>
          </ul>

        </li>
      </ul>

      <button id="open__nav-btn"><i class="uil uil-list-ul"></i></button>
      <button id="close__nav-btn"><i class="uil uil-times-circle"></i></button>
    </div>
  </nav>
  <!--================ENF OF NAVBAR===========----->
  
  

<section class="dashboard">
  <div class="container dashboard__container">
    <aside>
      <ul>
        <li><a href="add-post.php">
          <span class="material-symbols-outlined">
            edit
            </span>
            <h5>Add Post</h5>
           </a>
        </li>
        <li><a href="index.php">
          <span class="material-symbols-outlined">
            package
            </span>
            <h5>Manage Post</h5>
        </a></li>
        <li><a href="add-user.php">
          <span class="material-symbols-outlined">
            person_add
            </span>
            <h5>Add User</h5>
        </a></li>
        <li><a href="manage-user.php">
          <span class="material-symbols-outlined">
            group
            </span>
            <h5>Manage User</h5>
        </a></li>
        <li><a href="add-category.php">
          <span class="material-symbols-outlined">
            edit_square
            </span>
            <h5>Add Category</h5>
        </a></li>
        <li><a href="manage-categories.php" >
          <span class="material-symbols-outlined">
            category
            </span>
            <h5>Manage Categories</h5>
        </a></li>
      </ul>
    </aside>
     <main>
      <h2>Mange Categories</h2>
       <table>
        <thead>
          <tr>
            <th>Titel</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Travel</td>
            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
          </tr>

          <tr>
            <td>Wild Life</td>
            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
          </tr>
          <tr>
            <td>Music</td>
            <td><a href="edit-category.html" class="btn sm">Edit</a></td>
            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
          </tr>

        </tbody>
       </table>
     </main>
  </div>
</section>

<?php
include '../partials/footer.php'
?>