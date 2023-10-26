<?php


namespace  App\Utils;

class DB{
    public static function getDocumentByFilename(string $documentName) : mixed
    {
       $data  = file_get_contents(storage_path("data/$documentName.json"));
       if (!$data){
           return null;
       }
       else{
           return json_decode($data, true);
       }
    }
    public static function getDocumentById(string $docName, \Closure  $closure) : mixed
    {
       $data = static::getDocumentByFilename($docName);
       if (is_null($data)){
           return null;
       }
       foreach ($data as $datum){
           if ($closure($datum)){
               return $datum;
           }
       }

       return null;
    }
}
