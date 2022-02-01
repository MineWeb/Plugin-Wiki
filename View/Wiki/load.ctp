<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<?php $i = 0; ?>
<?php foreach ($wregistres as $wregistre): ?>
    <?php $i++; ?>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div style="cursor:pointer;" data-toggle="collapse"
                 data-target="#<?= $wregistre['Wregistre']['id']; ?>_<?= str_replace("'", '', str_replace(' ', '_', $wregistre['Wregistre']['name'])); ?>"
                 class="panel-heading">
                <div class="panel-title">
                    <img style="margin-right: 10px;" width="30px;" src="<?= $wregistre['Wregistre']['miniature']; ?>"
                         class="img-circle">
                    <h5 style="position: absolute;top: 4px;left: 80px;"><?= $wregistre['Wregistre']['name']; ?></h5>
                </div>
            </div>
            <div id="<?= $wregistre['Wregistre']['id']; ?>_<?= str_replace("'", '', str_replace(' ', '_', $wregistre['Wregistre']['name'])); ?>"
                 class="collapse">
                <div style="word-wrap: break-word;" class="panel-body">
                    <?= $wregistre['Wregistre']['desc']; ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php if ($i == 0) { ?>
    <div class="col-sm-12">
        <div class="alert alert-danger">
            <?= $Lang->get('WIKI__CATE_EMPTY'); ?>
        </div>
    </div>
<?php } ?>
