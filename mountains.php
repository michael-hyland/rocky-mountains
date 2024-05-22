<?php
function mountainGenerator($name, $height, $location, $image, $camping) {
    $mountain = [
        "name" => $name,
        "height" => $height,
        "location" => $location,
        "image" => $image,
        "camping" => $camping
    ];

    return $mountain;
}

$elbert = mountainGenerator("Mount Elbert", 14440, "Lake County", "images/elbert.jpeg", true);
$massive = mountainGenerator("Mount Massive", 14429, "Lake County", "images/massive.jpeg", true);
$harvard = mountainGenerator("Mount Harvard", 14420, "Chaffee County", "images/harvard.jpeg", false);

$mountains = [$elbert, $massive, $harvard];
?>

<section>
    <div class="inner-column">
        <ul>
            <?php foreach ($mountains as $m) { ?>
                <li>
                    <picture>
                        <img src="<?= $m['image'] ?>"">
                    </picture>
                    <div class=" text-content">
                        <h2><?= $m["name"] ?></h2>
                        <p><? $m["name"] ?> is <?= $m["height"] ?> feet tall and located in <?= $m["location"] ?>. Camping is <?= ($m["camping"]) ? null : 'not' ?> allowed.</p>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>