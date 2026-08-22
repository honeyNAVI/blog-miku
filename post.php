<?php
include_once("templates/header.php");

if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}

?>
    <main id= "post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
                <p class="post-content">"World is Mine" (ワールドイズマイン), lançada em 2008 pelo compositor ryo (do grupo Supercell), não é apenas uma música; é o hino histórico que coroou Hatsune Miku como a verdadeira realeza da cultura pop virtual. <br>
<br>
O Significado e a Narrativa <br> <br>
A letra apresenta uma protagonista caprichosa, exigente e cheia de atitude, que se autoproclama a dona do mundo. Ela exige do seu parceiro um tratamento de realeza: ele deve notar quando ela muda o penteado, estar pronto para elogiá-la, comprar doces e segurar sua mão, tudo sem reclamar. <br>
No entanto, a genialidade da música está em sua quebra de expectativa. Por trás dessa fachada de garota mimada (o clássico arquétipo tsundere da cultura pop japonesa), existe uma adolescente insegura e vulnerável. O que ela realmente deseja não é um servo obediente, mas alguém que a ame genuinamente, a proteja e a veja como a garota mais especial do mundo, mesmo com todos os seus defeitos e exigências absurdas. <br>
<br> <br>
A História e o Impacto no Fandom <br> <br>
Quando a faixa foi publicada na plataforma Nico Nico Douga, acompanhada pelas ilustrações icônicas do artista Redjuice, o impacto foi imediato. Nos primeiros anos do software Vocaloid, Hatsune Miku era essencialmente uma página em branco, um instrumento sem personalidade definida. "World is Mine" foi a música que deu a ela uma "alma" para os fãs. Ela cristalizou a imagem de Miku como uma diva pop intocável, mas carismática. <br>
O sucesso foi tão esmagador que a música catapultou o grupo Supercell para a fama profissional e se tornou presença obrigatória em praticamente todos os shows holográficos da Hatsune Miku pelo mundo. A coreografia em que ela desperta em uma cama no palco ao som dos primeiros acordes de guitarra é um dos momentos mais aguardados pelos fãs.
<br> <br>
Um trecho icônico (e inesquecível para qualquer fã) dita logo de início a energia da música:
<br><br>
    "Sekai de ichiban ohimesama" <br>
    "Sou iu atsukai kokoroete yo ne"
    <br> <br>
    "A princesa número um do mundo" <br> "Saiba que é assim que você deve me tratar"</p>
    <br> <br> <br>

    Ficou curioso sobre a música? Dê uma olhada! <br> <br>
    <a href="https://www.youtube.com/watch?v=EuJ6UR_pD5s">World Is Mine - Hatsune Miku</a>
            </div>
    <main>
        </div>
        <aside id="teste-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>                   
                <?php endforeach; ?>
            </ul>
                <h3 id="categories-title">Categorias</h3>
                <ul id="categories-list">
                    <?php foreach($categories as $category): ?>
                        <li><a href="#"><?= $category ?></a></li>                   
                    <?php endforeach; ?>
                </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>
