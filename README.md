# instaresize
Php image resize for instagram

# Setup

include '../src/Resize.php';
use MSC\Instaresize\Resize;

# Usage

$resize = new Resize();

$photo = 'your image path';

echo $resize->check($photo);
