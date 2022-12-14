<?php
  include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Amazing</title> 
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="cat.php">products</a></li>
        <li><a href="pro.php">Profiles</a></li>

        <li class="dropdown">
          <a class="dropbtn">Your Profile</a>
          <div class="dropdown-content">
            <a href="ord.php">Orders</a>
            <a href="ret.php">Returns</a>
            <a href="sho.php">Shopping Cart</a>
          </div>
        </li>
        <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"></button>
            </form>
        </div>
      </ul>
    </div>

    <table name = "Returns">
      <tr>
          <th>Return ID</th>
          <th>Order ID</th>
          <th>Reason</th>
          <th>Satus</th>
          <th>Return Date:</th>
      </tr>

      <?php
          $conn;
          $sql = "SELECT rt_id, o_id, reason, status, return_dt, FROM Returns";
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result) > 0){

              while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>';
                  echo '<td>'. $row['rt_id'] .'</td>';
                  echo '<td>'. $row['o_id'] .'</td>';
                  echo '<td>'. $row['reason'] .'</td>';
                  echo '<td>'. $row['status'] .'</td>';
                  echo '<td>'. $row['return_dt'] .'</td>';
                  echo '</tr>';
              }
          }
      ?>
  </table>

<script src="index.js"></script>
  </body>
</html>