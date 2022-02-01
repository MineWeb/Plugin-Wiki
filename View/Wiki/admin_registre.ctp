<?php
App::import('Controller', 'WikiController');
$Wiki = new WikiController();
?>
<section class="content">
    <div class="col-md-12">
        <h2><?= $Lang->get('WIKI__TITLE_REGISTRE_ADMIN'); ?></h2>
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title"><?= $Lang->get('WIKI__LIST_REGISTRE'); ?></h2>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div style="overflow:auto;">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th><?= $Lang->get('WIKI__LIST_REGISTRE'); ?></th>
                                    <th><?= $Lang->get('WIKI__NAME_OF_CATE'); ?></th>
                                    <th><?= $Lang->get('WIKI__URL_OF_MINIATURE'); ?></th>
                                    <th><?= $Lang->get('WIKI__DESC_OF_REGISTRE'); ?></th>
                                    <th><?= $Lang->get('WIKI__ACTION'); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($wregistres

                                as $wregistre): ?>
                                <tr>
                                    <td><?= $wregistre['Wregistre']['name']; ?></td>
                                    <td><?= $Wiki->getCategorie($wregistre['Wregistre']['cate_id']); ?></td>
                                    <td><?= substr($wregistre['Wregistre']['miniature'], 0, 40); ?>...</td>
                                    <td><?= substr($wregistre['Wregistre']['desc'], 0, 40); ?>...</td>
                                    <td>
                                        <a class="btn btn-primary"
                                           href="/admin/wiki/registre_edit/<?= $wregistre['Wregistre']['id']; ?>"><?= $Lang->get('WIKI__EDIT_BTN_ACTION'); ?></a>
                                        <form class="form-horizontal" method="POST" data-ajax="true"
                                              action="<?= $this->Html->url(['controller' => 'Wiki', 'action' => 'delete_registre']) ?>"
                                              data-redirect-url="?">
                                            <input type="hidden" name="id_registre_delete"
                                                   value="<?= $wregistre['Wregistre']['id']; ?>">
                                            <button class="btn btn-danger"><?= $Lang->get('WIKI__DELETE_BTN_ACTION'); ?></button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title">Créer un registre</h2>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form method="POST" data-ajax="true" data-redirect-url="?"
                              action="<?= $this->Html->url(['controller' => 'Wiki', 'action' => 'add_registre']) ?>">
                            <label><?= $Lang->get('WIKI__NAME_OF_REGISTRE'); ?></label>
                            <input type="text" name="name_registre" class="form-control">
                            <label><?= $Lang->get('WIKI__URL_OF_MINIATURE'); ?></label>
                            <input type="text" name="miniature_registre" class="form-control">
                            <label><?= $Lang->get('WIKI__CATEGORIE'); ?></label>
                            <select class="form-control" name="cate_registre">
                                <?php foreach ($wcategories as $wcategorie): ?>
                                    <option value="<?= $wcategorie['Wcategories']['id']; ?>"><?= $wcategorie['Wcategories']['name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= $this->Html->script('admin/tinymce/tinymce.min.js') ?>
                            <script type="text/javascript">
                                tinymce.init({
                                    selector: "textarea",
                                    height: 300,
                                    language: 'fr_FR',
                                    width: '100%',
                                    plugins: "textcolor image link",
                                    toolbar: "fontselect fontsizeselect bold italic underline strikethrough link image forecolor backcolor alignleft aligncenter alignright alignjustify cut copy paste bullist numlist outdent indent blockquote code"
                                });
                            </script>
                            <label><?= $Lang->get('WIKI__DESC_OF_REGISTRE'); ?></label>
                            <textarea id="editor" name="desc_registre" cols="30" rows="10"></textarea>
                            <hr>
                            <button class="btn pull-right btn-primary"
                                    type="submit"><?= $Lang->get('WIKI__CREATE_BTN_ACTION'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
