<?php ob_start(); ?>
    <section id="pageValidConfirm">
        <h2 class="title1">VOUS Y ÊTES PRESQUE !</h2>
        <h3 class="title2">Souhaitez-vous confirmer la commande ?</h3>
        <article>
            <img src="view/images/valid.jpg" alt="Visuel validation">
            <span>
                <a class="button1" href="index.php?page=panier">Retour</a>
                <a class="button1" href="index.php?page=confirmation">Confirmer</a>
            </span>
        </article>
    </section>
<?php $variablePage['contenuSection'] = ob_get_clean();

require("template.php");

