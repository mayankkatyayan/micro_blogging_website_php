
<?php
include 'partials/header.php';
?>
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
        <li><a href="dashboard.html" class="active">
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
        <li><a href="manage-user.html.html" >
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
            <th>Title</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
          
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
            <td>wild Life</td>
            <td>
              <a href="edit-post.html" class="btn sm">Edit</a></td>
            <td><a href="delete-category.html" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
            <td>wild Life</td>
            <td>
              <a href="edit-post.html" class="btn sm">Edit</a></td>
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
