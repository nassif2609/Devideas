<?php
require "database.php";




    $filter = $_POST["filter"];


    if($filter == "Travel") {
        $ideas = $pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Travel'");
        $ideas->execute();
        $showfilteredideas = $ideas->FETCHALL();
        print JSON_ENCODE($showfilteredideas);
    }
     elseif ($filter == "Education") {
        $filteredideas = $pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Education'");
        $filteredideas->execute();
        $showfilteredideas = $filteredideas->FETCHALL();
        print json_encode($showfilteredideas);
    }
    elseif($filter == "Shopping"){
        $filteredideas=$pdo ->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Shopping'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode( $showfilteredideas);
    }
    
    else if($filter == "Social Networking"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Social Networking'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "Communication"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Communication'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "Productivity"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Productivity'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "Health and Fitness"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Health and Fitness'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "Finance"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Finance'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
   
    else if($filter == "Books and Reference"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Books and Reference'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
 
    else if($filter == "Gaming"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Gaming'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "Utilities"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Utilities'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "News and Magazines"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'News and Magazines'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "Photography and Video"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Photography and Video'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "Food and Drink"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Food and Drink'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "Real Estate"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Real Estate'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }
    else if($filter == "Weather"){
        $filteredideas=$pdo->prepare("SELECT problems FROM problemsforSAAS WHERE options = 'Weather'");
        $filteredideas->execute();
        $showfilteredideas=$filteredideas->fetchall();
        print json_encode($showfilteredideas);
    }


  
?>
