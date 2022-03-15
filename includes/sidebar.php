<section class="sidebar">

    <div class="well search">
        <h2>Búsqueda</h2>
        <form action="search.php" method="POST">
            <input type="text" name="search" class="searchBar"><!--
        --><button name="submit" type="submit" id="boton-buscar">Buscar</button>
        </form>
    </div>            

    <div class="well categories">
        <h2>Categorías</h2>
        <ul>
            <?php 
                if($connection){
                    $query = "SELECT * FROM categories";
                    $query_result = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($query_result)){
                        $catTitle = $row['cat_title'];
                        echo "<li><a href='#'>{$catTitle}</a></li>";
                    }
                }
            ?>

        </ul>
    </div>


</section>