<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $title = $request->input('title');
        $caption = $request->input('caption');

        if ($request->hasFile('images')) {
            $uploadedImages = $request->file('images');

            foreach ($uploadedImages as $uploadedImage) {
                if ($uploadedImage->isValid()) {
                    $targetDirectory = 'uploads/';

                    $newImageName = uniqid('image_') . '.' . $uploadedImage->extension();

                    $uploadedImage->move($targetDirectory, $newImageName);

                    echo 'Image "' . $uploadedImage->getClientOriginalName() . '" uploaded successfully.<br>';
                    echo 'Title: ' . $title . '<br>';
                    echo 'Caption: ' . $caption . '<br>';
                    echo 'Image URL: ' . asset($targetDirectory . $newImageName) . '<br><br>';
                } else {
                    echo 'Error uploading image "' . $uploadedImage->getClientOriginalName() . '".<br>';
                }
            }
        } else {
            echo 'No images were uploaded.<br>';
        }
    }
}
