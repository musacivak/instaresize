# instaresize
Php image resize for instagram

# Setup

composer require msc/instaresize

# Usage
use MSC\Instaresize\Resize;

$resize = new Resize();

$photo = 'your image path';

echo $resize->check($photo);
