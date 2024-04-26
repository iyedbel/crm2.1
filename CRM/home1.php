<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Dropdown Menu | Korsat X Parmaga</title>

    <!-- Box Icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Styles  -->
    <link rel="shortcut icon" href="assets/img/kxp_fav.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Styles for centering the message */
        .center-message {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }
        /* Custom CSS for optimized design */
        .navbar {
            background-color: #1a202c; /* Darker gray */
            color: #ffffff; /* White text */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow effect */
            border-bottom: 2px solid #2d3748; /* Darker gray border bottom */
        }

        .navbar-brand {
            font-size: 1.75rem; /* Larger font size */
            font-weight: bold; /* Bold text */
        }
        .profile-btn {
            background-color: #4299e1; /* Blue */
            color: #ffffff; /* White text */
            border: none; /* No border */
            padding: 0.75rem 1.5rem; /* Padding */
            border-radius: 0.5rem; /* Rounded corners */
            transition: background-color 0.3s; /* Smooth transition */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow effect */
        }
        profile-btn:hover {
            background-color: #2c5282; /* Darker blue on hover */
        }
    </style>
</head>

<body>
<nav class="navbar">
    <div class="container mx-auto py-4 px-6 flex justify-between items-center">
        <span class="navbar-brand">welcome</span>
        <button id="profile-btn" class="profile-btn">Profile</button>
    </div>
</nav>
    <div class="sidebar close">
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box">
            <i class='bx bxl-xing'></i>
            <div class="hello-user">Welcome, <?php echo isset($_SESSION['nom']) ? $_SESSION['nom'] : ''; ?></div>
        </a>

        <!-- ========== List ============  -->
        <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-grid-alt'></i>
                        <span class="name">Dashboard</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Dashboard</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-collection'></i>
                        <span class="name">Gestion Utilisateurs</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Gestion Utilisateurs</a>
                    <a href="#" class="link">Gestion Admins</a>
                    <a href="#" class="link gestion-clients">Gestion Clients</a>
                    <a href="#" class="link">Gestion Comptables</a>
                    <a href="#" class="link">Gestion Vendeurs</a>
                    <a href="#" class="link">Gestion Commands</a>
                    <a href="#" class="link">Gestion Livreurs</a>
                </div>
            </li>

           
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-line-chart'></i>
                        <span class="name">Analytics</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Analytics</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="name">Chart</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Chart</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
           

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-compass'></i>
                        <span class="name">Explore</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Explore</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-history'></i>
                        <span class="name">History</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">History</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-cog'></i>
                        <span class="name">parametres</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">parametres</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
            <i class='bx bx-menu'></i>
            <div class="text">Toggle</div>
        </div>
    </section>

    <!-- Script AJAX pour charger le contenu de index1.php -->
    <script>
        // Fonction AJAX pour charger le contenu de index1.php
        function loadIndex1Content() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.querySelector('.center-message').innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "index1.php", true);
            xhttp.send();
        }

        // Sélectionnez le lien "Gestion Clients"
        var gestionClientsLink = document.querySelector('.gestion-clients');

        // Ajoutez un gestionnaire d'événements pour détecter le clic sur le lien "Gestion Clients"
        gestionClientsLink.addEventListener('click', function() {
            var centerMessage = document.createElement('div');
            centerMessage.classList.add('center-message');
            document.body.appendChild(centerMessage);
            // Charger le contenu de index1.php
            loadIndex1Content();
           
        });
    </script>
</body>

</html>
