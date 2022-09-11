<?php require_once('partials/_header.php'); 
    require_once('classes/client.php');


  $tab = [
    new client("mamadou", "mbaye", 77 ),
    new client("samba", "rang", 78, ),
    new client("moussa", "ba", 76),
    new client("Kiwi", "sow", 70),
    new client("kirikou", "petit", 33),
    new client("poulo","ka",76 ),
    new client("Papaye", "ley", 34),
    new client("jean", "michel",70),
];

?>



<h1 class="text-center">Liste des clients</h1>
  <div class="row text-center d-flex ">
    <?php foreach($tab as $client): ?>
    <div class="card col-md-3 mr-5 shadow-lg mb-2">
        <div class="card-header bg-warning"><?= $client->getPrenom() ?></div>
      <div class="card-body bg-dark">
        <h5 class="card-title text-white"><?= $client->getNom() ?></h5>
        <p class="card-text text-white">
          Prix : <?= $client->getNumero() ?>  <br>
        </p>
        <a href="info.php?prenom=<?= $c->getPrenom() ?>&nom=<?= $c->getNom() ?>&numero=<?= $c->getNumero() ?>" class="btn btn-info" title="Cliquez pour voir les infos de <?= $p->getNom() ?> ">Voir plus</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

<?php require_once('partials/_footer.php'); ?>