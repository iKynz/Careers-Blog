<?php
    include_once('templates/header.php');

    if(isset($_GET["id"])) {
        $postId = $_GET["id"];
        $currentPost;

        foreach($posts as $post) {
            if($post["id"] == $postId){
                $currentPost = $post;
            }
        }

    }
?>

<main id="post-container">
    <div class="content-container">
        
        <h1 id="main-title">
            <?= $currentPost["title"] ?>
        </h1>
        
        <p id="post-description">
            <?= $currentPost["description"] ?>
        </p>
         
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost["img"]?>" alt="<?= $currentPost["title"]?>">
        </div>

        <div>
            <p class="post-content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, laudantium. Rem, et. Iure, sequi molestias doloremque eveniet nemo sunt rem esse consequatur atque sapiente numquam voluptatum alias, expedita soluta ut.
                Omnis quisquam rem quo nemo accusantium autem dolores soluta minus beatae. Perferendis, voluptatum nam, eos aut ducimus debitis fugiat doloribus magnam iure minus voluptatibus culpa vero id maiores. Neque, dignissimos!
                Magni dolore officia voluptates magnam voluptas unde a, aliquid nemo ipsam omnis eaque? Unde, adipisci placeat? Repellat sapiente possimus voluptate modi atque animi suscipit vel fugit repudiandae ut. Ex, quisquam?
                Minima explicabo repellendus eligendi asperiores magni, aliquam accusantium autem! Recusandae aspernatur, quos, magnam quibusdam expedita et at enim, minima officia fugit adipisci ratione ab amet quisquam harum ea quis ducimus.
                Quam voluptates autem animi deserunt hic blanditiis, iusto itaque nihil unde fugiat nobis, quasi et molestiae provident officiis ipsa obcaecati debitis earum nisi. Magni sapiente, quam animi accusantium recusandae repellat?
            </p>
        </div>
        <div>
            <p class="post-content">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, laudantium. Rem, et. Iure, sequi molestias doloremque eveniet nemo sunt rem esse consequatur atque sapiente numquam voluptatum alias, expedita soluta ut.
                Omnis quisquam rem quo nemo accusantium autem dolores soluta minus beatae. Perferendis, voluptatum nam, eos aut ducimus debitis fugiat doloribus magnam iure minus voluptatibus culpa vero id maiores. Neque, dignissimos!
                Magni dolore officia voluptates magnam voluptas unde a, aliquid nemo ipsam omnis eaque? Unde, adipisci placeat? Repellat sapiente possimus voluptate modi atque animi suscipit vel fugit repudiandae ut. Ex, quisquam?
                Minima explicabo repellendus eligendi asperiores magni, aliquam accusantium autem! Recusandae aspernatur, quos, magnam quibusdam expedita et at enim, minima officia fugit adipisci ratione ab amet quisquam harum ea quis ducimus.
                Quam voluptates autem animi deserunt hic blanditiis, iusto itaque nihil unde fugiat nobis, quasi et molestiae provident officiis ipsa obcaecati debitis earum nisi. Magni sapiente, quam animi accusantium recusandae repellat?
            </p>
        </div>
    </div>

    <aside id="nav-container">

        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost["tags"] as $tag): ?>
                <li><a href="#">#<?= $tag ?></a></li>
            <?php endforeach ?>
        </ul>

        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach ?>
        </ul>

    </aside>

</main>

<?php
    include_once('templates/footer.php');
?>