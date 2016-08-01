# Compressor-V2
Automatically compresses a given file from the constructor if 'compress now' is true.

Alternatively, you may compress at a later point by using the compressFile method.

## Usage

* 1: Clone or download this project into your own project or framework, however you wish. 
(More detailed instructions including Composer will follow soon, once packagist is sorted out for this repository)



* 2: Create a .php file (or use an existing one) with the following code:
```
require_once('compressor.php');

$compressor = new Compressor('testingFile.txt', 'outputTest', true);
```
where 'compressor.php' also contains the location of the compressor code if required (such as if it is within a subdirectory).
However, much of this can be avoided with the usage of use statements, which this documentation (and file) will be updated for, very soon.

For now, an example using require_once is in the compressorTest.php file.



* 3: Once this code is within your codebase, making a new instance of the Compressor with the following parameters will suffice:
```
$compressor = new Compressor('$inputFileName (including extensions)', '$fileOutputName (including extensions)', $compressNow (true or false));
```



* 4: If you do not wish to compress any file as soon as you instantiate the compressor - fear not! Simply leave the original constructor's arguments blank and instead call the method:
```
$compressor->compressFile($inputFileName (including extensions), $outputFileName (including extensions));
```
when you are ready. 



* 5: All compressed files will appear within the CompressedFiles directory by default. You may change this in the constructor by adding a fourth parameter:
```
$compressor = new Compressor('$inputFileName (including extensions)', '$fileOutputName (including extensions)', $compressNow (true or false), $outputLocation);
```
Ensure that $outputLocation has a '/' on the end, so that the file goes into the required directory.


Any questions, comments or concerns - please do submit an 'issue' or leave a comment somewhere. I will try and get back to you as soon as possible!
