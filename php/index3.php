<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume builder</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #002e63;
            color: white;
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        /* Hide sidebar by default on mobile */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
        }

        /* Toggle button */
        .sidebar-toggle {
            display: none;
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 1.5rem;
            background: none;
            border: none;
            color: #333;
            cursor: pointer;
            z-index: 1001;
            padding: 8px;
        }

        @media (max-width: 768px) {
            .sidebar-toggle {
                display: block;
            }
        }

        /* Sidebar content styles */
        .sidenav {
            height: 100%;
            border-radius: 10px;
            padding: 1rem;
        }

        .sidenav-header {
            padding: 1rem;
            border-radius: 20em;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }

        .horizontal {
            border: none;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin: 1rem 0;
        }

        .navbar-nav {
            list-style: none;
            padding: 0;
        }

        .nav-item {
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.8rem;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .material-icons, .material-symbols-outlined {
            margin-right: 10px;
        }

        h6 {
            padding: 1rem;
            font-size: 0.75rem;
            text-transform: uppercase;
            opacity: 0.8;
        }

        /* Main content area */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }

        .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 55%;
        /* margin-left: 2.4em; */
        margin-top: 2em;
        padding-bottom: 1em;
        border-radius: 0.5em;
        }

        .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .card2 {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 90%;
        margin-left: -12em;
        margin-top: 1.4em;
        padding-bottom: 1em;
        border-radius: 0.5em;
        }

        .card2:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .card3 {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 95%;
        margin-left: -12em;
        margin-top: 2.5em;
        padding-bottom: 1em;
        border-radius: 0.5em;
        }

        .card3:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container {
        padding: 2px 16px;
        }

        .buat-flex{
            display: flex;
            margin-left: 2.5em;
        }

        .dua{
            margin-left: 1em;
        }

        .tiga{
            margin-left: -0.5em; 
        }

        #customers {
  font-family: 'Poppins', Helvetica, sans-serif;
  border-collapse: collapse;
  width: 95%;
  margin-left: 3em;
  margin-top: 1.4em;
}

#customers td, #customers th {
  /* border: 1px solid #ddd; */
  padding: 8px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #002e63;
  color: white;
  border: none;
  text-align: center;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 1em;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 0.5em;
}

.button3{
    background-color: red;
    border-radius: 0.5em;
}

.button4{
    background-color: #002e63;
    border-radius: 0.5em;
}

.main-content h3{
    margin-left: 2em; 
    margin-top: 1em;
}

.desc{
    margin-left: 2.3em;
}

.desc2{
    margin-left: 2.3em;
}
@media (max-width: 768px) {
    .main-content {
        margin-left: 0;
        padding: 10px;
    }

    .card, .card2, .card3 {
        width: 100%;
        margin: 1em auto;
    }

    .buat-flex {
        flex-direction: column;
        align-items: center;
    }

    #customers {
        width: 100%;
        margin: 1em 0;
    }

    .button {
        padding: 8px 16px;
        font-size: 0.9em;
    }

    .main-content h3{
        margin-left: 1em; 
        margin-top: 3em;
    }

    .desc{
        width: 75%;
        margin-left: 1.2em;
    }

    .desc2{
        width: 80%;
        margin-left: 1.2em;
    }

    .satu{
        margin-left: -5em;
        width: 80%;
    }

    .dua{
        margin-left: -5em;
        width: 80%;
    }

    .tiga{
        margin-left: -5em;
        width: 80%;
    }

    .h3{
        margin-left: 0.1em;
        margin-top: -1em; 
    }

}

@media (max-width: 480px) {
    .container h4 {
        font-size: 1.1em;
    }

    .container p {
        font-size: 0.9em;
    }

    #customers td, #customers th {
        padding: 6px;
        font-size: 0.9em;
    }
}
        
    </style>
</head>
<body>
    <button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>
    
    <div class="sidebar" id="sidebar">
        <aside class="sidenav">
            <div class="sidenav-header">
                <a class="navbar-brand" href="index3.php">
                    <img src="../images/logo2.png" alt="main_logo">
                    <span class="font-weight-bold">Resume builder</span>
                </a>
            </div>
            
            <hr class="horizontal">
            
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index3.php">
                            <i class="material-icons">dashboard</i>
                            <span>My resumes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create-resume.php">
                            <i class="material-icons">table_view</i>
                            <span>Create resume</span>
                        </a>
                    </li>
                    
                    <li class="nav-item mt-3">
                        <h6>More about this web</h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://smkpesat.sch.id/" target="_blank">
                            <span class="material-symbols-outlined">public</span>
                            <span>Sites</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://smkpesat.sch.id/contact/" target="_blank">
                            <span class="material-symbols-outlined">call</span>
                            <span>Contact</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/smkpesat_itxpro" target="_blank">
                            <span class="material-symbols-outlined">apartment</span>
                            <span>Instagram</span>
                        </a>
                    </li>
                    
                    <li class="nav-item mt-3">
                        <h6>Other menu</h6>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://smkpesat.sch.id/civitas/" target="_blank">
                            <span class="material-symbols-outlined">person</span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <span class="material-symbols-outlined">logout</span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <div class="main-content">
        <h3>Resume sample</h3>
        <div class="desc">
            <p>Here are some sample resumes that you can follow</p>
        </div>
        <div class="buat-flex">
            <div class="satu">
                <div class="card">
                    <a href="https://asset.velvetjobs.com/resume-sample-examples/images/graduate-software-engineer-v1.png" target="_blank"><img src="../images/image.png" alt="cvATS" style="width:100%"></a>
                    <div class="container">
                    <h4 style="margin-top: 0.5em;">Software engineering</h4> 
                    <p style="margin-top: 0.5em;">Problem solver creating efficient software solutions.</p> 
                    </div>
                </div>
            </div>
            <div class="dua">
                <div class="card2">
                    <a href="https://asset.velvetjobs.com/resume-sample-examples/images/visual-communications-v1.png" target="_blank"><img src="../images/image2.png" alt="cvATS" style="width:100%"></a>
                    <div class="container">
                    <h4 style="margin-top: 0.5em;">Communication design</h4> 
                    <p style="margin-top: 0.5em;">Crafting engaging visuals to communicate messages.     </p> 
                    </div>
                </div>
            </div>
            <div class="tiga">
                <div class="card3">
                    <a href="https://d25zcttzf44i59.cloudfront.net/senior-network-engineer-resume-example.png" target="_blank"><img src="../images/image3.png" alt="cvATS" style="width:90%"></a>
                    <div class="container">
                    <h4 style="margin-top: 0.5em;">Network engineering</h4> 
                    <p style="margin-top: 0.5em;">Efficient and effective data transmission strategies</p>
                    <!-- <p style="margin-top: 0.5em;">Efficient and effective data transmission strategies with  security.</p>   -->
                    </div>
                </div>
            </div>
        </div>
        <div class="h3">
            <h3>My resumes</h3>
        </div>
        <div class="desc2">
            <p>Take the time to design your own personalized resume that highlights your unique skills</p>
        </div>
        <div style="overflow-x:auto;">
            <table id="customers">
                <tr>
                  <th>No</th>
                  <th>Full name</th>
                  <th>Designation</th>
                  <th>Action</th>
                </tr>
                <?php
      // Modify the existing query
      $sql = "SELECT id, full_name, designation FROM creative WHERE user_id = ?";
      $stmt = mysqli_prepare($connection, $sql);
      mysqli_stmt_bind_param($stmt, "i", $_SESSION['id']); 
      mysqli_stmt_execute($stmt);
      $query = mysqli_stmt_get_result($stmt);
      
      if (!$query) {
          die("Error: " . mysqli_error($connection));
      }

      $no = 1;
      
      while($data = mysqli_fetch_assoc($query)){
          echo "<tr>";
          echo "<td>" . $no++ . "</td>";
          echo "<td>" . htmlspecialchars($data['full_name']) . "</td>";
          echo "<td>" . htmlspecialchars($data['designation']) . "</td>";
          echo "<td>";
          echo "<a href='delete.php?id=" . $data['id'] . "''><button class='button button3'>Delete</button></a>";
          echo "<a href='edit-resume.php?id=".$data['id']."'><button class='button button4'>Edit</button></a>";
          echo "<a href='preview.php?id=".$data['id']."'><button class='button'>Preview</button></a>";
          echo "</td>";
          echo "</tr>";
      }
      
    ?>
              </table>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const toggleButton = document.querySelector('.sidebar-toggle');
            sidebar.classList.toggle('open');
            toggleButton.classList.toggle('active');
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const toggleButton = document.querySelector('.sidebar-toggle');
            
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
                    sidebar.classList.remove('open');
                    toggleButton.classList.remove('active');
                }
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            const sidebar = document.getElementById('sidebar');
            const toggleButton = document.querySelector('.sidebar-toggle');
            
            if (window.innerWidth > 768) {
                sidebar.classList.remove('open');
                toggleButton.classList.remove('active');
            }
        });
    </script>
</body>
</html>