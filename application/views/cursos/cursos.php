<?php
	 foreach ($cursos->result() as $curso) { ?>
	 	
	 <ul>
	 	<li> <?= $curso->nombreCurso ?></li>
	 </ul>
	 

<?php } ?> <!-- agregar php a no sirve < ? ? > solo ojo-->

</body>
</html>