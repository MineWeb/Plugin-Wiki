<?php App::import('Controller', 'WikiController'); ?>
<section class="content">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header with-border">
                <h2 class="card-title"><?= $Lang->get("WIKI__TITLE_CATE_ADMIN"); ?></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h4><?= $Lang->get("WIKI__CREATE_CATE"); ?></h4>
                        <hr>
                        <form method="POST" data-ajax="true" data-redirect-url="?" action="<?= $this->Html->url(array('controller' => 'Wiki', 'action' => 'add_categorie')) ?>">
                            <label><?= $Lang->get('WIKI__NAME_OF_CATE'); ?></label>
                            <input type="text" name="name_cate" class="form-control">
                            <label><?= $Lang->get('WIKI__URL_OF_MINIATURE'); ?></label>
                            <input type="text" name="miniature_cate" class="form-control">
                            <hr>
                            <button class="btn btn-primary" type="submit"><?= $Lang->get('WIKI__CREATE_BTN_ACTION'); ?></button>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h4><?= $Lang->get('WIKI__LIST_CATE'); ?></h4>
                        <hr>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?= $Lang->get('WIKI__NAME_OF_REGISTRE'); ?></th>
                                    <th><?= $Lang->get('WIKI__ACTION'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($wcategories as $wcategorie): ?>
                                <tr>
                                    <td><?= $wcategorie['Wcategories']['name']; ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <a class="btn btn-primary" href="/admin/wiki/categorie_edit/<?= $wcategorie['Wcategories']['id']; ?>"><?= $Lang->get('WIKI__EDIT_BTN_ACTION'); ?></a>
                                            </div>
                                            <div class="col-sm-3">
                                                <form class="form-horizontal" method="POST" data-ajax="true" action="<?= $this->Html->url(array('controller' => 'Wiki', 'action' => 'delete_categorie')) ?>" data-redirect-url="?">
                                                    <button class="btn btn-danger"><?= $Lang->get('WIKI__DELETE_BTN_ACTION'); ?></button>
                                                    <input type="hidden" name="id_categorie_delete" value="<?= $wcategorie['Wcategories']['id']; ?>">
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
