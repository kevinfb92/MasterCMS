
<?php include "includes/db.php" ?>
<?php include "includes/header.php" ?>

<body>

    <?php include "includes/navigation.php" ?>

    <div class="container">
        <main class="main">
            <h1 class="page-header">Page heading <small>Secondary text</small></h1>
            <hr>
            <?php 
                if(isset($_POST['submit'])){
                    $search = $_POST['search'];

                    $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                    $query_result = mysqli_query($connection, $query);
                    if($query_result){
                        while($row = mysqli_fetch_assoc($query_result)){
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_content = $row['post_content'];
                            $post_image = $row['post_image'];
            ?>                
                            <h2 class="post-title"><?php echo $post_title ?></h2>
                            <p>Por <a href="index.php"><?php echo $post_author ?></a></p>
                            <p class="post-publish-date"><i class="fa-solid fa-clock"></i> Publicado el <?php echo $post_date ?></p>
                            <hr>
                            <img src="<?php echo $post_image ?>" alt="blog_image" class="responsive">
                            <hr>
                            <p><?php echo $post_content ?></p>
                            <button class="boton-leer">Leer más </button>
        
                    <?php }     
                    }
                    else{
                        die("Query failed" . mysqli_error($connection));
                    }
                }
            ?>
        </main>
        <?php include "includes/sidebar.php" ?>
    </div>    
    
    <?php include "includes/footer.php" ?>