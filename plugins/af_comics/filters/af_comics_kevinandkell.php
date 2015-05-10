<?php
class Af_Comics_Kevinandkell extends Af_ComicFilter {

	function supported() {
		return array("Kevin & Kell");
	}

	function process(&$article) {
		$matched = preg_match(
			'/^(https?:\/\/(www\.)?kevinandkell\.com\/([0-9]+))\/kk([0-9]+)\.html$/',
			$article["link"], $matches
		);

		if ($matched === 1) {
			$image_url = htmlspecialchars(
				$matches[1]."/strips/kk".$matches[3].$matches[4].".jpg"
			);

			$article["content"] = <<<EOT
<a href="$image_url"><img alt="Comic Strip" src="$image_url" /></a>
EOT;

			return true;
		}

		return false;
	}
}
?>
