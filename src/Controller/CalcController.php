<?php

 namespace App\Controller;

 class CalcController extends AppController
 {
   public function index()
   {

   }

   public function calc()
   {
     $this->request->data('calc');

      if ($this->request->is('calc_type' === "0")) {

             echo number_a + number_b ;
         } else if('calc_type' === "2"){
           echo number_a - number_b;
         } else if('calc_type' === "3"){
           echo number_a * number_b;
         } else if('calc_type' === "4"){
          echo  number_a / number_b;
        }

   }
 }
