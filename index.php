<?php
require 'users/users.php';

$users = getUsers();

include 'partials/header.php';
?>

    <button class="cadreButon">
        <a class="bouton" href="create.php">AJOUTER UN SITE</a>
    </button>
	
	<div class="titreCategorie">
GRAPHISME
    </div>
	
<div class="container">
<?php foreach ($users as $user): ?>

	<div class="cadre">
	
		<div class="overlay">
<strong><center><div class="titre">
		<?php echo $user['username'] ?>
		</div></center></strong>
		
		<p><?php echo $user['name'] ?></p>
		
		</div>
		
		<div class="blocImage">
			<?php if (isset($user['extension'])): ?>
			<img src="<?php echo "users/images/${user['id']}.${user['extension']}" ?>" alt="">
			<?php endif; ?>
		</div>

		<div class="blocFooter">	
			<div class="blocAdresse">
			<a target="_blank" href="<?php echo $user['website'] ?>"> vers le site</a>
			</div>
		<div class="blocDelete">
			<form method="POST" action="delete.php">
				<input type="hidden" name="id" value="<?php echo $user['id'] ?>">
				<button class="boutonDelete">X</button>
			</form>
		</div>
		</div>
	</div>

<?php endforeach;; ?> 
</div>


<?php include 'partials/footer.php' ?>

