<?php

 namespace App\Controller;

 class CalcController extends AppController
 {
   public function index()
   {

   }

   public function calc()
   {
     $this->request->data;
     $c_type = $this->request->data('calc_type');
     $this->set('type',$c_type);

     $num_a = $this->request->data('number_a');
     $num_b = $this->request->data('number_b');
     $this->set('A',$num_a);
     $this->set('B',$num_b);

     debug($this->request->data);

   }
 }
