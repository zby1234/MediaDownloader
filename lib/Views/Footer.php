<?php

namespace MediaDownloader\Views;

use \MediaDownloader\Utils\Document;

abstract class Footer
{
	public static function PrintView()
	{
		echo '
		<footer class="footer">
            <div class="well text-center">
                <p>Based on <a href="https://rg3.github.io/youtube-dl/" target="_blank">Youtube-dl</a> - <a href="https://github.com/Kallys/MediaDownloader" target="_blank">Fork on Github</a></p>
            </div>
        </footer>

        '.(Document::getInstance()->need_jquery ? '<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>' : '').'
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';
		
		self::PrintJavascript();
		
		echo '
    </body>
</html>';
	}
	
	private static function PrintJavascript()
	{
		foreach(Document::getInstance()->src_js as $js_src)
		{
			echo PHP_EOL.'        <script type="text/javascript" src="'.$js_src.'"></script>';
		}
	}
}
?>