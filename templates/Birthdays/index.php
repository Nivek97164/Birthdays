<!-- Si la variable $person est correctement définie, vous pouvez l'afficher comme ceci -->
<?php if (!empty($person)): ?>
    <h1>Informations de <?= $person['firstname'] ?> <?= $person['lastname'] ?></h1>
    <p>Nom : <?= $person['lastname'] ?></p>
    <p>Prénom : <?= $person['firstname'] ?></p>
    <p>Date de naissance : <?= $person['birthday'] ?></p>
<?php else: ?>
    <p>Aucune personne trouvée.</p>
<?php endif; ?>
