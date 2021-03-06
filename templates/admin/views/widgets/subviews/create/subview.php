		<section id="wrap">
			<form method="post" action="<?php echo WEBROOT ?>actions/widgets/create">
				<input id="token" name="token" type="hidden" value="{session.token}" />
				<fieldset>
					<h2 for="title">Titre du widget</h2>
					<input id="title" name="title" type="text" placeholder="Rentrez le nom ici" />
				</fieldset>
				<fieldset>
					<h2 for="content">Contenu de votre widget</h2>
					<textarea id="content" class="ckeditor" name="content" placeholder="Rentrez le contenu de votre widget ici"></textarea>
				</fieldset>
				<fieldset>
					<h2 for="tags">Propriétés de votre widget</h2>
					<input id="hidden" name="hidden" type="checkbox" /><label for="hidden">Cacher le widget</label>
				</fieldset>
				<input class="btn btn-success" name="submit" type="submit" value="Créer">
			</form>
		</section>
<?php $_page->script() ?>
<script src="<?php echo ASSETS ?>js/ckeditor/ckeditor.js"></script>
<?php $_page->endscript() ?>