<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <title>DevBlog Fullstack 2020</title>
</head>

<body>
    <section class="hero is-medium is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <span class="icon is-large">
                    <i class="fab fa-dev fa-3x"></i>
                </span>
                <h1 class="title">
                    DevBlog : A Blog for Developpers
                </h1>
                <h2 class="subtitle">
                    Engineered at Talis Business School
                </h2>
                <p>En construction@Fullstack 2020</p>
            </div>
        </div>
    </section>
    <article class="message is-warning my-5">
        <div class="message-header">
            <h2><?= $article->getTitle() ; ?>
            </h2>
            <p><small>Crée par <?= $article->getAuthor() ; ?> le :
                    <?= $article->getCreatedAt() ; ?> </small>
            </p>

        </div>
        <div class="message-body">
            <p><?= $article->getContent() ; ?>
            </p>
        </div>
    </article>
    <button class="button is-small backToHome is-primary is-light"><a href="../public/index.php">Retour à
            l'accueil</a></button>

    <section id="comments">
        <div class="container">

            <h3>Espace commentaires</h3>
            <?php
            foreach ($comments as $comment) {
                ?>
            <div class="box">
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>
                                <h4><?= $comment->getIdUser() ?>
                                </h4>
                            </strong> <small>
                                <p><?= $comment->getCreatedAt() ?>
                                </p>
                            </small>
                            <br>
                        <p><?= $comment->getContent() ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>
        </div>
    </section>
</body>

</html>