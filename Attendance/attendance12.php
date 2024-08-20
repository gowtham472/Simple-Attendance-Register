<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Bree+Serif&family=Fredoka+One&family=Josefin+Sans:wght@400;600;700&family=Poppins&family=Solway:wght@500&family=Spectral:ital,wght@0,300;0,600;1,300;1,600&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Alkatra:wght@600&family=Josefin+Sans&family=Roboto+Slab&display=swap");

    [type="date"] {
      font-family: "Josefin Sans", sans-serif;
      width: 50%;
      padding: 15px 15px;
      margin: 25px;
      display: inline-block;
      border: 1px solid white;
      border-radius: 8px;
      align-items: center;
      background-color: rgba(169, 169, 169, 0.884);
      box-sizing: border-box;
    }

    input[type="number"] {
      font-family: "Josefin Sans", sans-serif;
      width: 100%;
      padding: 15px 15px;
      margin: 8px 5px;
      display: inline-block;
      border: 1px solid white;
      border-radius: 8px;
      align-items: center;
      background-color: white;
      box-sizing: border-box;
    }

    input[type="numder"]:focus,
    input[type="address"]:focus,
    input[type="date"]:focus {
      outline: none !important;
    }

    #one {
      font-family: "Solway", serif;
      font-size: 15px;
      width: 50%;
      color: #ffffff;
      background-image: linear-gradient(144deg, #af40ff, #5b42f3 50%, #00ddeb);
      box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
      padding: 16px 20px;
      margin: 8px 5px;
      border: 1px solid white;
      border-radius: 10px;
      cursor: pointer;
      text-align: center;
    }

    #one:hover {
      background: none;
      background-image: linear-gradient(dodgerblue, dodgerblue, dodgerblue);
      transform: scale(0.95);
    }

    .main {
      max-width: 60%;
      margin: auto;
      border-radius: 50px;
      background: #ffffff;
      box-shadow: 20px 20px 60px #d9d9d9, -20px -20px 60px #ffffff;
      padding: 50px;
      font-size: 15px;
      align-items: center;
      padding: 8px 10px;
    }

    @media screen and (max-width: 600px) {
      .main {
        max-width: 90%;
      }
    }

    #cs {
      display: flex;
      justify-content: space-around;
    }

    h1 {
      font-size: 10px;
      text-align: center;
      font-family: "Josefin Sans", sans-serif;
      color: rgba(0, 102, 255, 0.427);
      text-transform: uppercase;
    }

    h2 {
      font-size: 40px;
      text-align: center;
      font-family: "Josefin Sans", sans-serif;
      color: rgb(87, 110, 255);
    }

    p {
      font-family: "Fredoka One", cursive;
      color: dodgerblue;
      font-size: 90px;
      margin: 100px 300px 0 300px;
      padding: 12px 20px;
      display: inline-block;
      border: 4px solid #f2f2f2;
      border-radius: 35px;
      box-sizing: border-box;
      background-color: dodgerblue;
    }

    h3,
    h5 {
      font-family: "Josefin Sans", sans-serif;
      text-align: left;
      color: white;
    }

    body {
      background: white;
      border-image-width: fixed;
      scroll-behavior: smooth;
    }

    table {
      display: flex;
      justify-content: center;
    }

    .radio-inputs {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      border-radius: 0.5rem;
      background-color: #eee;
      box-sizing: border-box;
      box-shadow: 0 0 0px 1px rgba(0, 0, 0, 0.06);
      padding: 0.25rem;
      width: 300px;
      font-size: 14px;
    }

    @media screen and (max-width: 600px) {
      .radio-inputs {
        padding: 0.15rem;
        display: block;
        width: 100px;
      }
    }

    .radio-inputs .radio {
      flex: 1 1 auto;
      text-align: center;
    }

    .radio-inputs .radio input {
      display: none;
    }

    .radio-inputs .radio .name {
      display: flex;
      cursor: pointer;
      align-items: center;
      justify-content: center;
      border-radius: 0.5rem;
      border: none;
      padding: 0.5rem 0;
      color: rgba(51, 65, 85, 1);
      transition: all 0.15s ease-in-out;
    }

    .radio-inputs .radio input:checked+.name {
      background-color: #fff;
      font-weight: 600;
    }

    table tr td {
      font-family: "Josefin Sans", sans-serif;
      font-size: 20px;
      color: royalblue;
      column-gap: 30px;
      border: 20px solid #ffffff;
    }

    #regis {
      background-image: linear-gradient(dodgerblue, dodgerblue, dodgerblue);
      border-radius: 10px;
      border: none;
      color: white;
      padding: 10px 20px;
      margin:auto;
      margin-top: 30px;
      display: block;
      text-align: center;
      font-size: 25px;
      max-width: 250px;
      font-family: "Josefin Sans", sans-serif;
      cursor: pointer;
      text-decoration: none;
    }
  </style>
  <title>Attendance</title>
</head>
 <a href="register.html" style="text-decoration: none"><button type="button" id="regis" href="register.html">Register</button></a>
<body id="form">
  <br />
  <br />
  <h2 style="text-align: center">
    ATTENDANCE
  </h2>
  <div class="main">
    <div class="ing">
      <form id="run" action="attendance12(1).php" method="post" enctype="multipart/form-data">

        <h1>Select The Date</h1>
        <div style="display:flex;justify-content:center">
          <input type="date" name="date" required />
       
      </div>
        

        <?php
          // Step 1: Establish the database connection
          $servername = "localhost";
          $username = "root";
          $password = "Gowthamk@0906=18";
          $dbname = "logindb";

          // Create connection
          $conn = new mysqli($servername, $username, "", $dbname);

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Step 2: Fetch the names from the 'attendance_register' table
          $sql = "SELECT name, id FROM attendance_register";
          $result = $conn->query($sql);

          if ($result === false) {
              echo "Error: " . $conn->error;
          } else {
              // Step 3: Display the fetched names in a table with radio buttons
              echo "<table border='0'>";

              while ($row = $result->fetch_assoc()) {
                  // Start a new table row for each name
                  echo "<tr>";

                  // Display the name in the first column
                  $name = htmlspecialchars($row['name']);
                  $id = htmlspecialchars($row['id']);

                  echo "<td>" . $id . "</td>";
                  echo "<td>" . $name . "</td>";

                  // Display the radio buttons in the second column
                  echo "<td>";
                  echo '<div class="radio-inputs">';

                  // Radio button for "Present"
                  echo '<label class="radio">';
                  echo '<input type="radio" name="' . $name . '" value="P" checked>';
                  echo '<span class="name">Present</span>';
                  echo '</label>';

                  // Radio button for "Absent"
                  echo '<label class="radio">';
                  echo '<input type="radio" name="' . $name . '" value="A">';
                  echo '<span class="name">Absent</span>';
                  echo '</label>';

                  echo '</div>';
                  echo "</td>";

                  echo "</tr>";
              }

              echo "</table>";
          }

          // Step 4: Close the database connection
          $conn->close();
        ?>
        <h6 style="text-align:center">
          <button id="one" type="submit">Enter</button>
        </h6>
      </form>
    </div>
  </div>
</body>

</html>
