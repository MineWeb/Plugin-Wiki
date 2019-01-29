<?php
App::import('Controller', 'WikiController');
$Wiki = new WikiController();
?>
<section class="content">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h2 class="box-title"><?= $Lang->get("WIKI__TITLE_REGISTRE_ADMIN"); ?></h2>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h4><?= $Lang->get("WIKI__UPDATE_REGISTER"); ?></h4>
                        <hr>
                        <form method="POST" data-ajax="true" data-redirect-url="/admin/wiki/registre" action="<?= $this->Html->url(array('controller' => 'Wiki', 'action' => 'update_registre')) ?>">
                            <input type="hidden" name="id" value="<?= $id; ?>" class="form-control">
                            <label><?= $Lang->get("WIKI__NAME_OF_REGISTRE"); ?></label>
                            <input type="text" name="name_registre" value="<?= $wregistre['Wregistre']['name']; ?>" class="form-control">
                            <label><?= $Lang->get("WIKI__URL_OF_MINIATURE"); ?></label>
                            <input type="text" name="miniature_registre" value="<?= $wregistre['Wregistre']['miniature']; ?>" class="form-control">
                            <label><?= $Lang->get("WIKI__CATEGORIE"); ?></label>
                            <select class="form-control" name="cate_registre">
                            	<option value="<?= $wregistre['Wregistre']['cate_id']; ?>"><?= $Wiki->getCategorie($wregistre['Wregistre']['cate_id']); ?></option>
                            	<?php foreach ($wcategories as $wcategorie) { ?>
                            		<option value="<?= $wcategorie['Wcategories']['id']; ?>"><?= $wcategorie['Wcategories']['name']; ?></option>
                            	<?php }?>
                            </select>
                            <?= $this->Html->script('admin/tinymce/tinymce.min.js') ?>
                            <script type="text/javascript">
                            tinymce.init({
                                selector: "textarea",
                                height : 300,
                                language : 'fr_FR',
                                value : 'test',
                                width : '100%',
                                plugins: "textcolor image link",
                                toolbar: "fontselect fontsizeselect bold italic underline strikethrough link image forecolor backcolor alignleft aligncenter alignright alignjustify cut copy paste bullist numlist outdent indent blockquote code"
                            });
                            </script>
                            <label><?= $Lang->get("WIKI__DESC_OF_REGISTRE"); ?></label>
                            <textarea id="editor"  name="desc_registre" cols="30" rows="10"><?= $wregistre['Wregistre']['desc']; ?></textarea>
                            <hr>
                            <button class="btn btn-primary" type="submit"><?= $Lang->get("WIKI__EDIT_BTN_ACTION"); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</section>
