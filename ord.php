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
        <li><a href="cat.html">products</a></li>
        <li><a href="pro.html">Profiles</a></li>

        <li class="dropdown">
          <a class="dropbtn">Your Profile</a>
          <div class="dropdown-content">
            <a href="ord.html">Orders</a>
            <a href="ret.html">Returns</a>
            <a href="sho.html">Shopping Cart</a>
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

    <table name = "Orders">
      <tr>
          <th>Order ID</th>
          <th>User ID</th>
          <th>Order date:</th>
          <th>Delivery date:</th>
          <th>Status</th>
          <th>Subtotal:</th>
      </tr>
    <?php
        $conn;
        $sql = "SELECT o_id, u_id, order_dt, delv_dt, status, subtotal, FROM Orders";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){

          while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'. $row['o_id'] .'</td>';
            echo '<td>'. $row['u_id'] .'</td>';
            echo '<td>'. $row['order_dt'] .'</td>';
            echo '<td>'. $row['delv_dt'] .'</td>';
            echo '<td>'. $row['status'] .'</td>';
            echo '<td>'. $row['subtotal'] .'</td>';
            echo '</tr>';
          }
        }
    ?>
  </table>

<script src="index.js"></script>
  </body>
</html>