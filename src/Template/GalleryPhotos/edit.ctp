<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleryPhoto $galleryPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $galleryPhoto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $galleryPhoto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Gallery Photos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="galleryPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($galleryPhoto) ?>
    <fieldset>
        <legend><?= __('Edit Gallery Photo') ?></legend>
        <?php
            echo $this->Form->control('src');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
