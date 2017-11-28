<!-- Categories Page Content -->
<div class="container">
    <h1 class="mt-4 mb-3">Categories</h1>

    <!-- m-Williams:  bread-crumb navigation -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Categories</li>            
    </ol>
    <!-- end bread-crumb -->
    
<?php
   //1. get the configuration file (holds the connection info)
            require './includes/config.php';
            
            //2.connect to the database
            require MYSQL;
           // var_dump($dbc);
            
             //3.  Build the SQL Query to retrieve all categories
            $q = "SELECT COUNT(*) FROM categories order by 1 desc";
            $stmt = $dbc->query($sql); //execute the query
            $cnt = $stmt->fetchColumn();// get one colum result
            
            //4.  Displat total number of categories
            echo "<h2>Total Categories: $cnt</h2>";
          
            
            //5.BUILD THE SQL QUERT TO RELRTIVE ALL CATEGORIES
            $Q = "SELECT ID, category FROM categories ORDER BY 1";
         

             //6. execute the query
             $stmt = $dbc->query($q);    
             $category_list = $stmt->fetchALL (PDO:: FETHC_ASSOC);
             
             //var_dump($category_list);
             //exit();
             //start the list  
             echo "<ul>";
             //7.lop the array and siaply in ul list
             foreach ($category_list as $row) {
                 echo "<li>".$row['id']." - ".$row['category']."</li>";
             }
             echo "</ul>"
?>

</div>
