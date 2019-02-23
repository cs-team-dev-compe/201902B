<?php

// head要素を読み込む
include_once("./head.php");
$title = about;


?>
<!-- aboutページです -->
<!-- header読み込み -->
<?= include_once("./header.html");?>

<article　class="aboutArticle">
    <h1 class="aboutArticle__title">当サイトについて</h1>
    <section class="aboutArticle__section">
        <p class="aboutArticle__section--content">アウトドア好きが送る、このサイトを見たらすぐにでも行きたくなるような魅力的なキャンプ場の数々を紹介するサイトです！　Let's
            キャンプ!!
        </p>

        <div class="aboutArticle__photo"></div>
    </section>
</article>


<!-- footer読み込み -->
<?= include_once("./footer.html");
