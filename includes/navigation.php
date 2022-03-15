    <nav>
        <div class="container nav">
            <ul>
                <li><a href='index.php'>Inicio</a></li>
                <?php 
                    $query = "SELECT * FROM categories";
                    $query_result = mysqli_query($connection, $query);

                    while($row = mysqli_fetch_assoc($query_result)){
                        $cat_title = $row['cat_title'];
                        echo "<li><a href='#'>{$cat_title}</a></li>";
                    }
                ?>
            </ul>
        </div>

    </nav>