<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeContent[]|\Cake\Collection\CollectionInterface $homeContents
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Home Content'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="homeContents index large-9 medium-8 columns content">
    <h3><?= __('Home Contents') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($homeContents as $homeContent): ?>
            <tr>
                <td><?= $this->Number->format($homeContent->id) ?></td>
                <td><?= h($homeContent->title) ?></td>
                <td><?= h($homeContent->description) ?></td>
                <td><?= h($homeContent->image) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $homeContent->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $homeContent->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $homeContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeContent->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
