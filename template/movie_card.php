<li class="mb-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?= $movie -> name ?>
            </h5>
            <h6 class="card-subtitle mb-2">
                Anno d'uscita:
                <?= $movie -> release_date ?>
            </h6>
            <h6 class="card-subtitle mb-2">
                Durata:
                <?= $movie -> duration ?>
                m
            </h6>
            <p class="card-text">
                <?= $movie -> getAbstract() ?>
            </p>
            <h6 class="card-subtitle mb-2">
                Genere principale:
                <ul class="ps-0">
                    <?php foreach($genres_1 ->genres as $genre) { ?>
                    <li class="text-muted ms-0 d-block">
                        <?= $genre ?>
                    </li>
                    <?php } ?>
                </ul>
            </h6>
        </div>
    </div>
</li>