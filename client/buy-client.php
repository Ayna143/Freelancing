<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel ="stylesheet" href="../style/clients.css">
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["userId"])){
            echo '<script>window.location.href = "../login/UserLogIn.php";</script>';
            exit();
        }

        if(isset($_GET['action']) && $_GET['action'] == 'logout') {
            session_destroy();
            echo '<script>window.location.href = "../home/Home.php";</script>';
            exit();
        }
    ?>
    <div class="logo">
        <img class="picture" src="../image/taskflow-logo.png">

        <div class="dashboard">
            <ul>
              <li><a href="client-explore.php" >Explore</a>  </li>
             <li> <a href="Find-Freelancer.php" class="tight-text">Find Designer  <i class="fa fa-caret-down"></i></a> 
             <div class="dropdown_menu">
                <ul>
                    <li><a href="client-freelancer-work.php" class="tight-text">Post Job</a></li>
                </ul>
             </div>
            </li>
             <li> <a href="client-about.php">About</a></li>
            </ul>
        </div>

        <div class="notif-profile">
            <img src="../image/3119338.png" alt="Notification icon" class="notif" id="notifBtn" />
            <div class="notification-popup" id="notifPopup">
                <p><strong>New Message:</strong> Your job application has been viewed!</p>
                <p><strong>Reminder:</strong> Update your profile today.</p>
              </div>
        <img class="profile" src="../image/prof.jpg" alt="profile" onclick="toggleMenu()">
        </div>

        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img class="profile" src="../image/prof.jpg">
                    <h4>Kristine Sabuero</h4>
                </div>
                <hr>

                <a href="client-profile.php" class="sub-menu-link">
                    <img src="../image/prof.jpg">
                    <p>Profile</p>
                    <span>></span>
                </a>
                <a href="../Home/Home.php" class="sub-menu-link" onclick="logout()">
                    <img src="../image/logo.png">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <main>
        <div class="content">
            <div class="title">
                <div class="logs"></div> 
                <p class="name-freelancer">Name</p>
                
                <span class="badge">FOLLOW</span>
            </div>
            <h1 class="create">CREATE WEBSITE UI DESIGN</h1>
            <div class="main-section">
                <div class="preview-box"></div>
                <div class="pricing-box">
                    <h2 class="h2">$50</h2>
                    <button style="background-color: rgb(247, 245, 140); color: rgb(58, 57, 57);"
                    onclick="togglePopup()">BUY NOW</button>

            
                    <div class="profession">
                        NAME
                        SKILLS
    
                    </div>
                    <div class="contact">
                        CONTACT: <br>
                        EMAIL: <br>
                        FACEBOOK: <br>
                        INSTAGRAM: <br>
                    </div>
                </div>
            </div>

            <div class="popup-overlay" id="popupOverlay" onclick="closePopup()"></div>

            <div class="booking-popup" id="bopopup">
                <button class="close-btn" onclick="closePopup()">X</button>
                <div class="booking-popup-profile">
                    <img class="popup-profile" src="../image/yellow circle.png" alt="profile mo">
                </div> 
                <h3>Connect with Amani Uri</h3>
                <p>Responds within 1 hour</p>
                <fieldset class="project-forms">
                    <label for="Pdetails">Project Details</label>
                    <p>Minimum 50 Characters</p>
                    <textarea rows="3" cols="50" id="Pdetails"></textarea> 
                    <br/><br/>
        
                    <label for="tdate">Target Date</label>
                    <p>Select when you need the project to be completed</p>
                    <input type="date" name="date">
                    <br/><br/>
        
                    <label for="pbudget">Project Budget</label>
                    <p>Amani Uri's minimum project rate is $100 (USD)</p>
                    <input type="number" name="rate">
                    <br/><br/>
        
                    <button type="button" class="btnbook">SEND MESSAGE</button>
                </fieldset>
            </div>

            <div class="offer-section">
                <h3>WHAT YOU GET WITH THIS OFFER:</h3>
                <p>engaging blog posts, article writing, or any type of content for your business, then you are at the right place.</p><br>
                <p>All my written blogs/articles will be:</p><br>
                <p>Plagiarism free, unique and original content created only for you</p>
                <p>Search engine optimised with relevant SEO keywords</p>
                <p>Reaches out to your audience at the highest level</p>
                <p>650 words written in excellent English</p>
                <p>Proofread before final submission</p>
                <p>Well researched to add value</p>
                <p>Minimum turnaround time</p>
                <p>Keyword Insertion</p>
    
    
            </div>
            <div class="reviews">
                <h3>REVIEWS (100)</h3>
                <div class="review-box">
                    <p>Client</p>
                    <fieldset>
                        <p>fantastic work! I'm super satisfied</p>
                    </fieldset>
                </div>
                <div class="review-box">
                    <p>Client</p>
                    <fieldset>
                        <p>fantastic work! I'm super satisfied</p>
                    </fieldset>
                </div>
                <div class="review-box">
                    <p>Your comment</p>
                    <fieldset>
                        <p></p>
                    </fieldset>
                </div>
            </div>
        </div>
    </main>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open");
        }
    </script>

    <script>
    function logout() {
        alert("You have been logged out successfully."); 
        
    }
</script>

    <script>
        function togglePopup() {
            document.getElementById("bopopup").style.display = "block";
            document.getElementById("popupOverlay").style.display = "block";
        }

        function closePopup() {
            document.getElementById("bopopup").style.display = "none";
            document.getElementById("popupOverlay").style.display = "none";
        }
    </script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const notifBtn = document.getElementById('notifBtn');  
        const notifPopup = document.getElementById('notifPopup');  
    
     
        notifBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            notifPopup.style.display = notifPopup.style.display === 'block' ? 'none' : 'block';
        });
    
        
        document.addEventListener('click', function (e) {
            if (!notifPopup.contains(e.target) && e.target !== notifBtn) {
                notifPopup.style.display = 'none';
            }
        });
    });
    </script>
    
</body>
</html>