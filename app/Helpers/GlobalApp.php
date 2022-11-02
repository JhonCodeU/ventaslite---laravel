<?php

namespace App\Helpers;

class GlobalApp
{
    public static function saveFile($file, $path)
    {
        $imageName = uniqid() . '_.' . $file->getClientOriginalName();
        $file->storeAs('public/' . $path, $imageName);

        return $imageName;
    }
}
