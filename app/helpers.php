
<?php
use Illuminate\Support\Facades\Storage;

function uploadS3($file, $dir='uploads') {
	if($file) {
		$fileName = $file->getClientOriginalName();
	    $filePath = "$dir/" . time() .'_'.$fileName;
	    $path = Storage::disk("s3")->put(
	        $filePath,
	        file_get_contents($file)
	    );
	    $path = Storage::disk("s3")->url($filePath);
	}

    return $path ?? '';
}