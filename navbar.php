<style>
  *{
    margin: 0px;
    padding: 0px;
  }
  nav{
    background-color: black;
    display: flex;
    align-items: center;
    justify-content: space-between;
    
    
    color: white;
  }
  .containers-fluid{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-left: 20px;
    
  }
  .d-flex{
    padding-right: 20px;
  }
</style>
<nav class="navbar navbar-dark bg-dark">

  <div class="containers-fluid">

    <h1><a class="navbar-brand" href="index.php">KOMODOHUB</a></h1>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
        </li>
</ul>
</div>
<div>
    <form class="d-flex" >
        <a class="btn btn-outline-success mx-2" type="submit" href="signup.php">Signup</a>
        <a class="btn btn-outline-primary mx-2" type="submit" href="login.php">Login</a>
        <a class="btn btn-outline-danger mx-2" type="submit" href="logout.php">Logout</a>
    </form>
</div>

  
</nav>
