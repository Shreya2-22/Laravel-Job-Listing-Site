<?php
    namespace App\Models;

    class Listing{

        public static function all(){
            return [
                ['id' => 1, 'title' => 'Listing One', 'description' => 'Description for listing one'],
                ['id' => 2, 'title' => 'Listing Two', 'description' => 'Description for listing two'],
                ['id' => 3, 'title' => 'Listing Three', 'description' => 'Description for listing three'],
            ];
        }

        public static function find($id){
            $listings = self::all();

            foreach ($listings as $listing) {
                if ($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }