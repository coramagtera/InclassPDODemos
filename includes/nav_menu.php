 <ul class="navbar-nav ml-auto">
<?php
    //Convert above static menu to a dynamic menu using an array of labels and pages
    //to allow us to dynamically set the active menu item based on the current page the user 
    //is currently visiting
    $pages = array(
        'Home'=>'/InclassPDODemos/index.php',
        'Categories'=>'/InclassPDODemos/categories.php',
        'Articles'=>'/InclassPDODemos/articles.php',
        'About'=>'/InclassPDODemos/about.php',
        'Services'=>'/InclassPDODemos/services.php',
        'Contact'=>'/InclassPDODemos/contact.php',
    );
    
    //Find out which page user is viewing
    $this_page = $_SERVER['REQUEST_URI'];
    // =========== test =================//
    //echo $this_page;
    //exit();
    // ========= end test ===============//    
   
    
    //loop the array and check if array page matches $this_page
    foreach($pages as $k=>$v):
        echo '<li class="nav-item';
              
            if($this_page==$v){
                echo ' active">';
            }else{
                echo '">';
            }
        echo '<a class="nav-link" href="'.$v.'">'. $k.'</a>
            </li>';
    endforeach;
?>
 </ul>