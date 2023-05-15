<?php

namespace app\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class client{

     public string $body;
     public string $title;
     public string $date;
     public string $excerpt;
     public string $id;

    public function __construct($body, $title, $date, $excerpt, $id){
        $this->body = $body;
        $this->title = $title;
        $this->date = $date;
        $this->excerpt = $excerpt;
        $this->id = $id;
    }

    public static function all() {

        return collect(File::allFiles(resource_path('/clients/')))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($client) => new Client(
                $client->body(),
                $client->title,
                $client->date,
                $client->excerpt,
                $client->id
            ))
            ->sortByDesc('date');
        // return cache()->rememberForever('clients.all', function (){
        //     return collect(File::allFiles(resource_path('/clients/')))
        //     ->map(fn($file) => YamlFrontMatter::parseFile($file))
        //     ->map(fn($client) => new Client(
        //         $client->body(),
        //         $client->title,
        //         $client->date,
        //         $client->excerpt,
        //         $client->id
        //     ))
        //     ->sortByDesc('date');
        // });
    }

    public static function find($id) {
        return static::all()->firstWhere('id', $id);
    }

    public static function findOrFail($id) {

        $client =  static::find($id);

        if (! $client){
            throw new ModelNotFoundException();
        }

        return $client;
    }
}