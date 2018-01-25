<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>
            </div>
        </div>
        <?= dmstr\widgets\Menu::widget([
            'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
            'items' => [
                ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                [
                    'label' => 'Access',
                    'icon' => 'gear',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Roles', 'icon' => 'file-code-o', 'url' => ['/permit/access/role']],
                        ['label' => 'Permissions', 'icon' => 'dashboard', 'url' => ['/permit/access/permission']],
                    ],
                ],
            ],
        ]) ?>
    </section>
</aside>
