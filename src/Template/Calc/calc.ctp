<h>四則演算</h>



<p>計算方法を選んでください</p>

<?= $this->Form->create('calc',['url' => ['action' => 'calc']]); ?>
  <?= $this->Form->select(
      'calc_type',
      ["足し算","引き算","掛け算","割り算"],
      ["empty" => "(一つ選ぶ)"]
    ); ?>

  <p>値を入力してください</p>

  <?= $this->Form->input('number_a',['label' => '値１']); ?>
  <?= $this->Form->input('number_b',['label' => '値２']); ?>
  <?= $this->Form->button('calc'); ?>
<?= $this->Form->end(); ?>

  答えは
  <?php if(($type) === "0"): ?>
        <?= $A + $B ;?>
      <?php elseif(($type) === "1"): ?>
        <?= $A - $B ;?>
      <?php elseif(($type) === "2"): ?>
        <?= $A * $B ;?>
      <?php elseif(($type) === "3"): ?>
        <?= $A / $B ;?>
      <?php endif; ?>
  です。
