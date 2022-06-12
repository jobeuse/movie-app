<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropDown extends Component
{
    public $search;
    public $error;

    public function render()
    {
        $searchResult=[];

        if(strlen($this->search) >2 )
        {
            try { 
                $searchResult=Http::get('https://api.themoviedb.org/3/search/movie?query='.$this->search.'&api_key=698e2ed7adec5c43d05f615374de9c46&language=en-US&page=1&include_adult=true')->json()['results'];                
            } catch (Exception $e) {
               $this->error =$e;
            }
            $this->error="";
        }elseif(strlen($this->search) <= 2 ){
            if(!empty($this->search)){
                $this->error="Keep typing"; 
            }
           
        }
       
        return view('livewire.search-drop-down',[
            'searchResult'=>collect($searchResult)->take(6),
        ]);
    }
}
