<form method="POST">
	Escolha o módulo:<br/>
	<select name="modulos" id="modulos" onchange="pegarAulas(this)">
		<option></option>
		<?php foreach ($modulos as $item): ?>
		<option value="<?php echo $item['id'];?>"><?php echo $item['titulo'];?></option>
		<?php endforeach;?>	
	</select><br/><br/>

	Escolha a aula:<br/>
	<select name="aulas" id="aulas">

	</select><br/><br/>

	<input type="submit" value="Enviar" />
</form>