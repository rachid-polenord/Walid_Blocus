<?php header("Content-Type: text/html; charset=utf-8"); ?>

        <div class="card-header">
            <h3>
                <?php if ($user['id']): ?>
                    Update user <b><?php echo $user['name'] ?></b>
                <?php else: ?>
                    Ajouter un nouveau site
                <?php endif ?>
            </h3>
        </div>
<div class="containerForm">

    <div class="card">

<div class="card-body">
            <form method="POST" enctype="multipart/form-data"action="">
				<div class="form-group">
                    <label>Titre</label>
					</br>
                    <input name="username" value="<?php echo $user['username'] ?>"
                           class="form-control <?php echo $errors['username'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['username'] ?>
                    </div>
                </div>
</div>				
				
				</br>
<div class="card-body">				
                <div class="form-control">
                    <label>Description</label>
					</br>
                    <input name="name" value="<?php echo $user['name'] ?>"
                           class="form-control-description <?php echo $errors['name'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['name'] ?>
                    </div>
                </div>
</div>				
				
				</br>
<div class="card-body">				
                 <div class="form-group">
                    <label>Adresse</label>
					</br>
                    <input name="website" value="<?php echo $user['website'] ?>"
                           class="form-control  <?php echo $errors['website'] ? 'is-invalid' : '' ?>">
                    <div class="invalid-feedback">
                        <?php echo  $errors['website'] ?>
                    </div>
                </div>
</div>
				</br>
<div class="card-body">				
                <div class="form-group">
                    <label>Image</label>
					</br></br>
                    <input name="picture" type="file" class="form-control-file">
                </div>
				</br>
                <button class="btn btn-success">Envoyer</button>
            </form>
			
</div>
    </div>
	
</div>
