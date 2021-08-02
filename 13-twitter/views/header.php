<!doctype html>
<html lang="en" class="h-100">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link type="text/css" rel= "stylesheet" href= "http://jkl2hostingpackage-com.stackstaging.com/13-twitter/styles.css">

    
  </head>
 <body class="d-flex flex-column h-100">
      
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="http://jkl2hostingpackage-com.stackstaging.com/13-twitter/">Twitter</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="?page=timeline">Your Timeline</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="?page = yourtweets">Your Tweets</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="?page = publicprofiles">Public Profiles</a>
                </li>
                
              </ul>
              <div class="d-flex">
                  
                  <?php if ($_SESSION['id']) { ?>
    
                    <a class="btn btn-outline-success" href="?function=logout">Logout</a>
                
                  <?php } else { ?>
                    
                    <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Login/Signup</button>
    
                  <?php } ?>
                
                
              </div>
            </div>
          </div>
        </nav>