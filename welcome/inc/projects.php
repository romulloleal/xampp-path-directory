<div class="title">
	<img src="img/list.png" width="20"> Projects
</div>
<ul>
	<?php

	$path = '../';

					// Loop que gera registros
	foreach (new DirectoryIterator($path) as $fileInfo) {

		$dir = $fileInfo->getFilename();
						// echo '->' .filetype($dir).'<br>';


		$noShow = ['webalizer', 'xampp', 'img', '.', '..', 'welcome'];

		if(is_dir($path.$dir) && !in_array($dir, $noShow)){
			echo '<li><a href="'.$path.$dir.'" target="_blank">
			<img src="img/open-folder.png" width="20"> '
			.$dir.
			'</a></li>';
		}
	}
	?>
</ul>