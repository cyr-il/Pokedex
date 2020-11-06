<h1>Détails du Pokémon</h1>


<section>
<div class="container d-flex flex-row mw-100">
  <div class="row justify-content-between">
    <div class="col character-card ">
    <img src="<?= BASE_URI ."/img/". $viewData[0]->getPokemon_numero() ?>.png" class="rounded mx-auto d-block" alt="...">
 
    <div>
        <h3 class="character-title" style ="color:#<?= $viewData[0]->getColor() ?>"># <?= $viewData[0]->getPokemon_numero() . ' ' . $viewData[0]->getNom() ?></h3>
        <?php
        if (isset($viewData[1]))
        {
        ?><h3 class="character-title" style ="color:#<?= $viewData[1]->getColor() ?>"># <?= $viewData[0]->getPokemon_numero() . ' ' . $viewData[1]->getNom() ?></h3>
        <?php }?>
        
        <h4>Statistiques</h4>
       
        <h4>PV</h4>
        <div class="progress" style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width:<?= $viewData[0]->getPv() ?>%;" aria-valuenow="<?= $viewData[0]->getPv() ?>" aria-valuemin="0" aria-valuemax="100"><?= $viewData[0]->getPv() ?>%</div>
        </div>

        <h4>Attaque</h4>
        <div class="progress" style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width:<?= $viewData[0]->getAttaque() ?>%;" aria-valuenow="<?= $viewData[0]->getAttaque() ?>" aria-valuemin="0" aria-valuemax="100"><?= $viewData[0]->getAttaque() ?>%</div>
        </div>

        <h4>Défense</h4>
        <div class="progress" style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width:<?= $viewData[0]->getDefense() ?>%;" aria-valuenow="<?= $viewData[0]->getDefense() ?>" aria-valuemin="0" aria-valuemax="100"><?= $viewData[0]->getDefense() ?>%</div>
        </div>

        <h4>Attaque Spé</h4>
        <div class="progress" style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width:<?= $viewData[0]->getAttaque_spe() ?>%;" aria-valuenow="<?= $viewData[0]->getAttaque_spe() ?>" aria-valuemin="0" aria-valuemax="100"><?= $viewData[0]->getAttaque_spe() ?>%</div>
        </div>

        <h4>Défense Spé</h4>
        <div class="progress" style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width:<?= $viewData[0]->getDefense_spe() ?>%;" aria-valuenow="<?= $viewData[0]->getDefense_spe() ?>" aria-valuemin="0" aria-valuemax="100"><?= $viewData[0]->getDefense_spe() ?>%</div>
        </div>

        <h4>Vitesse</h4>
        <div class="progress" style="height: 20px;">
            <div class="progress-bar" role="progressbar" style="width:<?= $viewData[0]->getVitesse() ?>%;" aria-valuenow="<?= $viewData[0]->getVitesse() ?>" aria-valuemin="0" aria-valuemax="100"><?= $viewData[0]->getVitesse() ?>%</div>
        </div>

    </div>

    </div>
  
  </div>
</div>
  </section>

 