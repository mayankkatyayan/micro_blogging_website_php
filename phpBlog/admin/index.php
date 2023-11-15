
<?php
include '../partials/header.php';
?>
  <!--================ENF OF NAVBAR===========----->
  
  

<section class="dashboard">
  <div class="container dashboard__container">
    <aside>
      <ul>
        <li><a href="add-post.phph">
          <span class="material-symbols-outlined">
            edit
            </span>
            <h5>Add Post</h5>
           </a>
        </li>
        <li><a href="index.php" class="active">
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
        <li><a href="manage-user.php" >
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
              <a href="edit-post.php" class="btn sm">Edit</a></td>
            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
          </tr>
          <tr>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
            <td>wild Life</td>
            <td>
              <a href="edit-post.php" class="btn sm">Edit</a></td>
            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
            <td>Yes</td>
          </tr>

          

        </tbody>
       </table>
     </main>
  </div>
</section>

<?php
include '../partials/footer.php';
?>
  