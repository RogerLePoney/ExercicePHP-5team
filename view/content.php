<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center">
        <button type="button" class="btn btn-primary my-1" data-toggle="modal" data-target="#addContactModal">
        Ajouter un contact
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content" method="GET" action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="addContactModalLabel">Ajout contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Phillipe">
                    </div>
                    <div class="form-group">
                        <label for="nom">Prénom</label>
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Garreau">
                    </div>
                    <div class="form-group">
                        <label for="photo">Url d'une photo de profil</label>
                        <input type="text" class="form-control" name="photo" id="photo" placeholder="https://media.gettyimages.com/photos/business-traveler-at-hotel-reception-picture">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <input type="submit" class="btn btn-primary" value="Ajouter"/>
                </div>
            </form>
        </div>
        </div>
    </div>
    <div class="container">
    <div class="row no-gutters">
        <?php
            foreach($allUsers as $user) {
                ?> <div class="card col-12 col-md-6 col-lg-3">
                    <img class="card-img-top" src="<?php echo $user->getPhoto();?>" alt="<?php echo 'photo de '.$user->getNom();?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $user->getNom().' '.$user->getPrenom()?></h5>
                        <p class="card-text"><?php echo $user->getDescription();?></p>
                    </div>
                </div> <?php
            }
        ?>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>