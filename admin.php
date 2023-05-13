<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Sidebar -->
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Admin Page</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="admin.html">Comments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="images.html">Images</a>
      </li>
    </ul>
  </nav>

  <!-- Main Content -->
  <div id="page-content-wrapper">
    <div class="container-fluid">
        <h1>Comments</h1>
        <div class="table-responsive">
          <table class="table table-striped">
              <thead>
              <tr>
                  <th>Comment</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Best Time to Call</th>
              </tr>
              </thead>
              <tbody>
                <?php
                require 'vendor/autoload.php';
                // Connect to MongoDB
                $mongoClient = new MongoDB\Client('mongodb+srv://ahmedfighter1990:XoD7n9IBUYwpkrfa@ahmedcluster.kmzemsr.mongodb.net/?retryWrites=true&w=majority');
                $collection = $mongoClient->comments->comments;
            
                // Fetch comments from the database
                $cursor = $collection->find();
                foreach ($cursor as $document) {
                    echo '<tr>';
                    echo '<td>' . $document['comment'] . '</td>';
                    echo '<td>' . $document['name'] . '</td>';
                    echo '<td>' . $document['mobile'] . '</td>';
                    echo '<td>' . $document['email'] . '</td>';
                    echo '<td>' . $document['time'] . '</td>';
                    echo '</tr>';
                }
            ?>
              </tbody>
          </table>
        </div>
    </div>
</div>

  <!-- jQuery and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>

