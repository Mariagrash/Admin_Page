<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
    <h1>Anime Series Reminder</h1>
    <form action="create_animelists.php" method="post">
        <label for="cat" id="cat"></label>
        <select name="cat" id="cat">
            <option value="0">Action</option>
            <option value="1">Comedy/Slice-of-Life</option>
            <option value="2">Drama/Tragedy</option>
            <option value="3">Psychological</option>
            <option value="4">History</option>
            <option value="5">Mecha/Military</option>
            <option value="6">Supernatural/Magic</option>
            <option value="7">Romance</option>
        </select>
        <label for="text">Anime Title</label>
        <textarea name="text" id="text"></textarea>
        <label for="animetitledate">Date</label>
        <input type="date" id="animetitledate" name="animetitledate"/>
        <label for="watched">Entirely Viewed</label>
        <input type="checkbox" id="watched" name="watched" value="1"/><br/>
        <button type="submit">Submit Reminder</button>
    </form>
    <?php
    @include 'config.php';
    $select = "SELECT * FROM animetitle";
    $result = mysqli_query($conn, $select) or die(mysqli_error($select));
    print("<h2>Unwatched</h2>");

    // Unwatched
    while($row = mysqli_fetch_array($result)){
        if($row['animetitle_watched'] == 0){
            if($row['animetitle_category'] == 0){
                $cat = "Action";
            }elseif ($row['animetitle_category' == 1]){
                $cat = "Comedy/Slice-of-Life";
            }elseif ($row['animetitle_category' == 2]){
                $cat = "Drama/Tragedy";
            }elseif ($row['animetitle_category' == 3]){
                $cat = "Psychological";
         }elseif ($row['animetitle_category' == 4]){
            $cat = "History";
    }elseif ($row['animetitle_category' == 5]){
        $cat = "Mecha/Military";
}elseif ($row['animetitle_category' == 6]){
    $cat = "Supernatural/Magic";
    }elseif ($row['animetitle_category' == 7]){
        $cat = "Romance";
}
    echo "<div class='animetitle'>";
    echo "<a href='watched.php?id" . $row['animetitle_id'] . "'><button class ='btnWatched'>Watched</button'";
    echo $cat . "</strong><p>" . $row['animetitle_text'] . "</p>Anime Title Date: ". $row['animetitle_date'];
    echo "</div>";
    }
}
// Watched
    print("<h2>Already Watched</h2>");
    $result = mysqli_query($conn, $select) or die(mysqli_error($conn));
    while($row = mysqli_fetch_array($result)){
        if($row['animetitle_watched'] == 0){
            if($row['animetitle_category'] == 0){
                $cat = "Action";
            }elseif ($row['animetitle_category' == 1]){
                $cat = "Comedy/Slice-of-Life";
            }elseif ($row['animetitle_category' == 2]){
                $cat = "Drama/Tragedy";
            }elseif ($row['animetitle_category' == 3]){
                $cat = "Psychological";
         }elseif ($row['animetitle_category' == 4]){
            $cat = "History";
    }elseif ($row['animetitle_category' == 5]){
        $cat = "Mecha/Military";
}elseif ($row['animetitle_category' == 6]){
    $cat = "Supernatural/Magic";
    }elseif ($row['animetitle_category' == 7]){
        $cat = "Romance";
}
    echo "<div class='animetitle'>";
    echo "<a href='delete.php?id" . $row['animetitle_id'] . "'><button class ='btnDelete'>Delete</button'";
    echo $cat . "</strong><p>" . $row['animetitle_text'] . "</p>Anime Title Date: ". $row['animetitle_date'];
    echo "</div>";
    }
} 
    
    
    ?>
    </div>
    
</body>
</html>