
<?php
  include 'partials/header.php'
?>

  <section class="form__section">
  <div class="container from__section-container">
    <h2>Edit Category</h2>
    
    <form action="" enctype="multipart/form-data">
      <input type="text" placeholder="Title">
      <textarea rows="4" placeholder="Description"></textarea>
      <button type="submit" class="btn">Update Category</button>
      <small>Don't have an account ?  <a href="signup.html">Sign Up</a></small>
    </form>
  </div>
</section>

<?php
include '../partials/footer.php'
?>