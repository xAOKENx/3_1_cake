<h>四則演算</h>



<p>計算方法を選んでください</p>

<?= $this->Form->create('index',['url' => ['action' => 'calc']]); ?>
  <?= $this->Form->select(
      'calc_type',
      ["足し算","引き算","掛け算","割り算"],
      ["empty" => "(一つ選ぶ)"]
    ); ?>

  <p>値を入力してください</p>

  <?= $this->Form->input('number_a'); ?>
  <?= $this->Form->input('number_b'); ?>
  <?= $this->Form->button('Add'); ?>
<?= $this->Form->end(); ?>

答えは<?php  ?>　　です。
