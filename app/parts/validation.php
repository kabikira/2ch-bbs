    <!-- バリデーションチェックのエラー文吐き出し -->
<?php if (isset($errro_message)) : ?>
    <ul class="errorMssage">
        <?php foreach ($errro_message as $error) : ?>
            <li><?php echo $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>