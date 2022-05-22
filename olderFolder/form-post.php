<?php
// données non envoyées
$post = false;

// données envoyées
// $post = true;

// aucune erreur
$errors = [];

// erreur dans le champ test
// $errors = ['test' => "Le champ n'est pas correctement rempli."];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Form post</h1>
                <form action="/form-validate.php" method="post">
                    <!-- version PHP -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control
                        <?php if ($post && empty($errors['test'])): ?>
                            is-valid
                        <?php endif ?>
                        <?php if ($post && !empty($errors['test'])): ?>
                            is-invalid
                        <?php endif ?>
                        " type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                        <?php if ($post && empty($errors['test'])): ?>
                            <div class="valid-feedback">
                                Le champ est correctement rempli.
                            </div>
                        <?php endif ?>
                        <?php if ($post && !empty($errors['test'])): ?>
                            <div class="invalid-feedback">
                                <?= $errors['test']?>
                            </div>
                        <?php endif ?>
                    </div>

                    <!-- Version formulaire vierge -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                    </div>

                    <!-- Version formulaire correct -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-valid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                        <div class="valid-feedback">Le champ est correctement rempli.</div>
                    </div>

                    <!-- Version formulaire erreur -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-invalid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                        <div class="invalid-feedback">
                        <div class="invalid-feedback">Le champ n'est correctement pas rempli.</div>
                        </div>
                    </div>



                    <div class="mb-3">
                        <input type="text" class="form-control" name="login" id="login" placeholder="votre nom d'utilisateur" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder="votre mot de passe" required>
                    </div>
                    <div class="mb-3">
                        <p>Votre fruit préféré :</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fruit" id="fruit_1" value="Ananas" checked>
                            <label class="form-check-label" for="fruit_1">Ananas</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fruit" id="fruit_2" value="Banane">
                            <label class="form-check-label" for="fruit_2" >Banane</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fruit" id="fruit_3" value="Cerise">
                            <label class="form-check-label" for="fruit_3">Cerise</label>
                        </div>
                    </div>
                    <div class="md-3">
                        <p>Vos plats préférés :</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="plat[]" id="plat_1" value="Lasagne" checked>
                            <label class="form-check-label" for="plat_1">Lasagne</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="plat[]" id="plat_2" value="Ramen">
                            <label class="form-check-label" for="plat_2">Ramen</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="plat[]" id="plat_3" value="Entrecôte">
                            <label class="form-check-label" for="plat_3">Entrecôte</label>
                        </div>
                    </div>
                    <div class="md-3">
                        <p>Votre film préféré :</p>
                        <!-- l'attribut size permet de choisir le nombre d'éléments affichés en même temps -->
                        <!-- <select name="film" id="film" size="2"> -->
                        <select name="film" id="film">
                            <option id="film_1" value="Interstellar">Interstellar</option>
                            <option id="film_2" value="Fight club">Fight club</option>
                            <option id="film_3" value="Shining" selected>Shining</option>
                        </select>
                    </div>
                    <div class="md-3">
                        <p>Votre chanteur préféré :</p>
                        <select name="singers[]" id="singers" size="3" multiple>
                            <option id="singer_1" value="Céline Dion">Céline Dion</option>
                            <option id="singer_2" value="Linkin Park">Linkin Park</option>
                            <option id="singer_3" value="Jean-Jacques Goldman">Jean-Jacques Goldman</option>
                        </select>
                    </div>
                    <div class="md-3">
                        <p>Vos plats préférés :</p>
                        <div class="custum-checkbox">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="plat_alt[]" id="plat_alt_1" value="Lasagne" checked>
                            <label class="form-check-label" for="plat_alt_1">Lasagne</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="plat_alt[]" id="plat_alt_2" value="Ramen">
                                <label class="form-check-label" for="plat_alt_2">Ramen</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="plat_alt[]" id="plat_alt_3" value="Entrecôte">
                                <label class="form-check-label" for="plat_alt_3">Entrecôte</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>