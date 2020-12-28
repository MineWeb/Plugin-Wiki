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
                        <h4><?= $Lang->get('WIKI__UPDATE_CATE'); ?></h4>
                        <hr>
                        <form method="POST" data-ajax="true" data-redirect-url="/admin/wiki/categories" action="<?= $this->Html->url(array('controller' => 'Wiki', 'action' => 'update_categorie')) ?>">
                            <input type="hidden" name="id" value="<?= $id; ?>" class="form-control">
                            <label><?= $Lang->get('WIKI__NAME_OF_CATE'); ?></label>
                            <input type="text" name="name_cate" value="<?= $wcategorie['name']; ?>" class="form-control">
                            <label><?= $Lang->get('WIKI__URL_OF_MINIATURE'); ?></label>
                            <input type="text" name="miniature_cate" value="<?= $wcategorie['miniature']; ?>" class="form-control">
                            <hr>
                            <button class="btn btn-primary" type="submit"><?= $Lang->get('WIKI__CREATE_BTN_ACTION'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
