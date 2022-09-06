<?php

namespace App\Models;

use Symfony\Component\HttpFoundation\Response;

class Gazpalackok
{

    protected $id;
    protected $termekNev;
    protected $termekKiszereles;
    protected $mennyiseg;


    public function get($mezonev)
    {

        if (isset($this->$mezonev)) {
            return $this->mezonev;
        } else {
            new Response('Nincs ilyen paraméter');
        }
    }

    public function set($mezonev){





    }

    public function checkFieldTypeFromTable(){


        
    }




}
