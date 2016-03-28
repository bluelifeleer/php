<?php
/**
 * [加载类文件]
 * @param  [string] $path      [类文件目录]
 * @param  [array || string] $className [类文件名]
 * @return [type]            [description]
 * @author 李鹏
 * @email  <[thebulelife@163.com]>
 * @date 2016-03-28
 */
// loadClass('./', 'aaa');
function loadClass($path = './', $className) {
	$path = !empty($path) && is_dir($path) ? $path : './';
	if (is_array($className)) {
		for ($i = 0; $i < count($className); $i++) {
			$path = $path . $className[$i] . '.class.php';
			if (file_exists($path)) {
				$path = $path;
			} else {
				return 'file is not exists !';
			}
			// var_dump($path);
			require_once $path;
		}
	} else {
		$path = $path . $className . '.class.php';
		if (file_exists($path)) {
			$path = $path;
		} else {
			return 'file is not exists !';
		}
		// var_dump($path);
		require_once $path;
	}

}