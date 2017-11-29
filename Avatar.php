<?php 

class Avatar {

	private $image;

	public function __construct($string, $block = 5, $size = 400) {
		$togenerate = ceil($block / 2);

		$hash = md5($string);
		$hashsize = $block * $togenerate;
		$hash = str_pad($hash, $hashsize, $hash);
		$color = substr($hash, 0, 6);

		$image = imagecreate($size, $size);
		$bg = imagecolorallocate($image, 255, 255, 255);
		$color = imagecolorallocate($image, hexdec(substr($color, 0, 2)), hexdec(substr($color, 0, 4)), hexdec(substr($color, 0, 6)));
		$blocksize = $size / $block;

		for ($x = 0; $x < $block; $x++) {
			for($y = 0; $y < $block; $y++) {

				if ($x < $togenerate) {
					$pixel = hexdec($hash[$x * 5 + $y]) % 2 == 0;
				} else {
					$pixel = hexdec($hash[(($block - 1) - $x) * 5 + $y]) % 2 == 0;
				}
				

				$pixelColor = $bg;

				if ($pixel) {
					$pixelColor = $color;
				}

				imagefilledrectangle($image, $x * $blocksize, $y * $blocksize, ($x + 1) * $blocksize, ($y + 1) * $blocksize, $pixelColor);
			}
		}

		ob_start();
			imagepng($image);
			$this->image = ob_get_contents();
		ob_end_clean();
	}

	public function display() {
		header('Content-type: image/png');
		echo $this->image;
	}

	public function base64() {
		return 'data:image/png;base64,' . base64_encode($this->image);
	}

	public function save($filename) {
		if (file_put_contents($filename, $this->image)) {
			return $filename;
		}
	}
}