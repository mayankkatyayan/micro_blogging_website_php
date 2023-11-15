
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
        <li><a href="add-post.html">
          <span class="material-symbols-outlined">
            edit
            </span>
            <h5>Add Post</h5>
           </a>
        </li>
        <li><a href="dashboard.html">
          <span class="material-symbols-outlined">
            package
            </span>
            <h5>Manage Post</h5>
        </a></li>
        <li><a href="add-user.html">
          <span class="material-symbols-outlined">
            person_add
            </span>
            <h5>Add User</h5>
        </a></li>
        <li><a href="manage-user.html.html" class="active">
          <span class="material-symbols-outlined">
            group
            </span>
            <h5>Manage User</h5>
        </a></li>
        <li><a href="add-category.html">
          <span class="material-symbols-outlined">
            edit_square
            </span>
            <h5>Add Category</h5>
        </a></li>
        <li><a href="manage-categories.html" >
          <span class="material-symbols-outlined">
            category
            </span>
            <h5>Manage Categories</h5>
        </a></li>
      </ul>
    </aside>
     <main>
      <h2>Mange Users</h2>
       <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Username</th>
            <th>Edit</th>
            <th>Delete</th>
            <th>Admin</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Pradip </td>
            <td>Panjiyar</td>
            <td>
              <a href="edit-category.html" class="btn sm">Edit</a></td>
            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
          </tr>

          <tr>
            <td>Nilam </td>
            <td>Jyoti Deka </td>
            <td>
              <a href="edit-category.html" class="btn sm">Edit</a></td>
            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
          </tr>

        </tbody>
       </table>
     </main>
  </div>
</section>

<footer>
  <div class="footer__socials">
    <a href="https://youtube.com" target="_blank"><img src="./Darjeeling Trip/facebook.png" alt=""></a>
    <a href="https://youtube.com" target="_blank"><img src="./Darjeeling Trip/youtube.png" alt=""></a>
    <a href="https://youtube.com" target="_blank"><img src="./Darjeeling Trip/facebook.png" alt=""></a>
    <a href="https://youtube.com" target="_blank"><img src="./Darjeeling Trip/github.png" alt=""></a>
  </div>
  <div class="container footer__container">
    <article>
      <h4>Categories</h4>
      <ul>
        <li><a href="">Art</a></li>
        <li><a href="">Sports</a></li>
        <li><a href="">Fest</a></li>
        <li><a href="">Music</a></li>
        <li><a href="">Travel</a></li>
        <li><a href="">Science and Technology</a></li>
        <li><a href="">Wild Life</a></li>
      </ul>
    </article>

    <article>
      <h4>Support</h4>
      <ul>
        <li><a href="">Online Support</a></li>
        <li><a href="">Phone</a></li>
        <li><a href="">Email</a></li>
        <li><a href="">Socail Support</a></li>
        <li><a href="">Location</a></li>
       
      </ul>
    </article>

    <article>
      <h4>Permalinks</h4>
      <ul>
        <li><a href="">Home</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Services</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </article>

    <article>
      <h4>Blog</h4>
      <ul>
        <li><a href="">Safety</a></li>
        <li><a href="">Repair</a></li>
        <li><a href="">Recent</a></li>
        <li><a href="">Popular</a></li>
        <li><a href="">Categories</a></li>
      </ul>
    </article>
  </div>
  <div class="footer__copyright">
    <small> copyright &copy:2023 Team Zeng4</small>
  </div>
</footer>
<script src="./main.js"></script>
</body>
</html>
