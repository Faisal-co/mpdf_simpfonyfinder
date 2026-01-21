<?php
use Symfony\Component\Finder\Finder;

require 'vendor/autoload.php'; // it Controlls every package.
require './vendor/autoload.php'; // it is the way to Control Custom namespaces folders.
//require_once __DIR__ . '/vendor/autoload.php';

use Anyo\Emo; // namespace\class name
echo Emo::hello();
echo "<br>";
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>it is creating pdf page not a html browser page</h1>
<table border = "1">
<tr>
<th>Name</th> 
<th>Class</th>
</tr>
<tr>
<td>Faisal</td>
<td>Dev</td>
</tr>
<tr>
<td>Sohail</td>
<td>software</td>
</tr>
<tr>
<td>ahsan</td>
<td>14th</td>
</tr>

</table>');
$mpdf->Output();

$finder = new Finder();
// $finder->files()->in(__DIR__ .'/media'); // give all files with All file types.
$finder->files()->in(__DIR__ .'/media')->name('*.webp'); // give all files with Specific file type.

foreach ($finder as $file) {
    //var_dump($file->getRelativePathname()); // getting file names with file Types.

    var_dump($file->getSize());


}


?>