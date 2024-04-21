<?php

namespace App\Services;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader
{
  private ParameterBagInterface $parameterBag;

  public function __construct(ParameterBagInterface $parameterBag)
  {
    $this->parameterBag = $parameterBag;
  }

  public function uploadFile(UploadedFile $file): string
  {
    $filename = md5(uniqid()) . '.' . $file->guessExtension();

    // Move the file to the directory where brochures are stored
    try {
      $file->move(
        $this->parameterBag->get('uploads_dir'),
        $filename
      );

      return $filename;
    } catch (FileException $e) {
      // ... handle exception if something happens during file upload
    }
  }
}
