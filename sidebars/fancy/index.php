<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="./style.css" rel="stylesheet" id="style-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
</head>

<!------ Include the above in your HEAD tag ---------->

    <div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Digital Decore
                    </a>
                </li>
                <li>
                    <a href="#top">Software Engineer Artifacts</a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">MIT Sprint Spreadsheets<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Bi-Weekly Sprints</li>
                    <li><a href="#sprint1">Sprint 1</a></li>
                    <li><a href="#sprint2">Sprint 2</a></li>
                    <li><a href="#sprint3">Sprint 3</a></li>
                    <li><a href="#sprint4">Sprint 4</a></li>
                    <li><a href="#sprint5">Sprint 5</a></li>
                    <li><a href="#sprint6">Sprint 6</a></li>
                    <li><a href="#sprint7">Sprint 7</a></li>
                    <li><a href="#sprint8">Sprint 8</a></li>
                  </ul>
                </li>
                <!-- <li>
                    <a href="#">Sprint</a>
                </li>
                <li>
                    <a href="#">Events</a> -->
                </li>
                <!-- <li>
                    <a href="#v-2.0.1-activity-diagram-dd-file-intake.svg">Activity Diagram</a>
                </li> -->
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">dd-file-intake Activity Diagrams<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Version Snapshots</li>
                    <li><a href="#v-2.0.1-activity-diagram-dd-file-intake.svg">v-2.0.1-latest</a></li>
                    <li><a href="./dd-file-intake-activity-diagram-v-2.0.0.html">v-2.0.0</a></li>
                    <!-- <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li> -->
                  </ul>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="https://github.com/mharoot">Follow me</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <a name="top"></a>
                        <h1> Digital Decore Software Engineering Artifacts </h1>
                        <p> You will find Activity Diagrams, UMLs, Product Backlog, sprint spreadsheets, and other software engineering artifacts as they become available.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                            <span class="hamb-top"></span>
                            <span class="hamb-middle"></span>
                            <span class="hamb-bottom"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <a name="v-2.0.1-activity-diagram-dd-file-intake.svg"></a>
                        <h1>Digital Decore File Intake activity diagram (Latest Version <b>2.0.1</b>):</h1>
                        <p> We have been using this activity diagram since version 2.0.1 of the software. We are currently on version 2.0.5 of the software and still using the activity diagram below.</p>
                        <?php include_once "v-2.0.1-activity-diagram-dd-file-intake.svg"; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script src="./main.js"></script>