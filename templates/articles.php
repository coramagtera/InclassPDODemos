
<!-- Articles Page Content -->
<div class="container">
    <h1 class="mt-4 mb-3">Articles</h1>

    <!-- mwilliams:  breadcrumb navigation -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Articles</li>            
    </ol>
    <!-- end breadcrumb -->
    
    <?php
     //1. get the configuration file (holds the connection info)
        require './includes/config.php';

        //2.connect to the database
        require MYSQL;
        
        //3. et the total number of records in pages table
        $sql = 'SELECT (*) FROM pages';
        $stmt = $dbc->query($sql); //execute the query
        
        //get first coum fr the first row in resultset
        $cn = $stmt->fetchColum();
        
        //4,dispay the total number of pages\
        echo "<h2>total arciacles : $cnt</h2>>";
        
        //5.  Build the SQL Query to retrieve all articles
        $q = "SELECT id, title, description FROM pages;";

        //6.  Execute the query
        $stmt = $dbc->query($q);
        
        //7. fetch all the rcords from the statemnt above
        $artucke_list = $stmt->fetechALL(PDO:FETCH_ASSOC);
    ?>

    </div>