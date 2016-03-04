# instaresize

quick and easy image resizing class for instagram.

# Setup

composer require msc/instaresize dev-master

or

	"require": {
		"msc/instaresize": "dev-master"
	},

# Usage
use MSC\Instaresize\Resize;

$resize = new Resize();

$photo = 'your image path';

echo $resize->check($photo);
