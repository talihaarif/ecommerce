<h1> Categories </h1>
<ul class="list-group">
<?php
$get_cats = "select * from categories";
$run_cats = mysqli_query($con, $get_cats);
while ($row_cats= mysqli_fetch_array($run_cats)){
    $cat_id = $row_cats['cat_id'];
    $cat_title = $row_cats['cat_title'];
    echo "<li class='list-group-item'>$cat_title</li>";
}
?>
</ul>
