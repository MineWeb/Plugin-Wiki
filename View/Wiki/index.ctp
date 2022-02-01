<div class="container">
    <div class="row">
        <h2><?= $title_for_layout; ?> - <?= (isset($website_name)) ? $website_name : 'MineWeb' ?></h2>
        <hr>
        <div id="cate_wiki">
            <?php foreach ($wcategories as $wcategorie): ?>
                <div class="col-sm-3">
                    <div style="cursor:pointer;" onclick="loadWiki('<?= $wcategorie['Wcategories']['id']; ?>');"
                         class="panel panel-default">
                        <div class="panel-body">
                            <img style="width:100%;" src="<?= $wcategorie['Wcategories']['miniature']; ?>">
                            <hr>
                            <center><h4><?= $wcategorie['Wcategories']['name']; ?></h4></center>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <div style="display: none;" id="load_wiki"></div>
            </div>
        </div>
    </div>
</div>
<script>
    var WIKI__BACK_TO_CATE = "<?= $Lang->get('WIKI__BACK_TO_CATE'); ?>";
</script>
<?= $this->Html->script('Wiki.loadWiki.js'); ?>