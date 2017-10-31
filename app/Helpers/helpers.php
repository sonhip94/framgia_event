<?php

if (! function_exists('upload_file')) {

    function upload_file($file, $file_path, $file_name = '')
    {
        try {
            if ($file_name == '') {
                $name = config('app.name') . time() . '.' . $file->getClientOriginalExtension();
            } else {
                $name = $file_name;
            }
            $file->move($file_path, $name);
            return true;
        } catch (Exception $e) {
            Log::error($e);
        }

        return false;
    }
}
