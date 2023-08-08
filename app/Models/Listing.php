<?php
namespace App\Models;

class Listing {
    public static function all(){
        return  [
            [
                'id' => 1,
                'title' =>'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor volutpat ullamcorper. Nullam bibendum aliquet sapien, quis ullamcorper urna efficitur vel. Duis eleifend, nisi eu dignissim varius, risus enim sagittis ipsum',
            ],
            [
                'id' => 2,
                'title' =>'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor volutpat ullamcorper. Nullam bibendum aliquet sapien, quis ullamcorper urna efficitur vel. Duis eleifend, nisi eu dignissim varius, risus enim sagittis ipsum',
            ]
            ];
    } //close funtion
    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
 
    }
}//end listing



?>