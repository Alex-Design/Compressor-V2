<?php
/*
 * Reads a file as a string, compresses it and outputs the result.
 */
class Compressor {
    
    public $fileToCompress;
    public $outputFileName;
    public $outputLocation;

    public function __construct($fileToCompress = NULL, $outputFileName = NULL, $compressNow = FALSE, $outputLocation = 'CompressedFiles/') 
    {
        $this->fileToCompress = $fileToCompress;
        $this->outputFileName = $outputFileName;
        $this->outputLocation = $outputLocation;
        
        if ($compressNow == TRUE && !$this->outputFileName == NULL && !$this->fileToCompress == NULL) {
            $this->compressFile();
        }
    }
    
    public function compressFile($fileName = NULL, $outputFileName = NULL) {
        
        // The filename will be null if the constructor is used to compress the file
        if ($fileName == NULL) {
            $fileName = $this->fileToCompress;
            $outputFileName = $this->outputFileName;
        }
        
        $fileContents = $this->readFileContent($fileName);
        $this->createAndWriteFile($fileContents, $outputFileName);
    }
    
    public function readFileContent($fileToRead) {
        $fileContents = file_get_contents($fileToRead, 'r');
        return $fileContents;
    }
    
    private function createAndWriteFile($data, $fileOutputName) {
        $gzData = gzencode($data, 9);
        $filePath = fopen($this->outputLocation . $fileOutputName . '.gz', "w");   
        $this->writeFile($filePath, $gzData);
    }
    
    private function writeFile($filePath, $gzData) {
        fwrite($filePath, $gzData);
        fclose($filePath);
    }
}