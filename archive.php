<?php $this->need('header.php'); ?>

	<?php if ($this->have()): ?>
	<div id="bodyer" class="container">
        <div class="row">
            <div class="col-md-8">
				<div class="alert alert-info alert-dismissible fade in" role="alert">
	                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                    <span aria-hidden="true">×</span>
	                </button>
	                <p class="page-title"><?php $this->archiveTitle(array(
		              	'category'  =>  _t('分类 %s 下的文章'),
		              	'search'    =>  _t('包含关键字 %s 的文章'),
		              	'tag'       =>  _t('标签 %s 下的文章'),
		              	'author'    =>  _t('%s 发布的文章')
	          		), '', ''); ?></p>
	            </div>
			<?php while($this->next()): ?>
                <section class="wallpaper clearfix article">
                    <div class="article-title">
                        <h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                    </div>
                    <div class="article-tag">
                        <span class="label label-danger"><i class="fa fa-calendar"></i></i>&nbsp;<a href="#"><?php $this->date('y-m-d') ?></a></span>
                        <span class="label label-info"><i class="fa fa-tags"></i>&nbsp;<a href="#"><?php $this->tags(',', true, 'none'); ?></a></span>
                        <span class="label label-warning"><i class="fa fa-cog fa-spin"></i></i>&nbsp;<a href="#"><?php $this->category(','); ?></a></span>
                        <span class="label label-success"><i class="fa fa-user"></i>&nbsp;<a href="#"><?php $this->author(); ?></a></span>
                    </div>
                    <figure>
                      <a href="<?php $this->permalink() ?>">
                            <?php showThumbnail($this); ?>
                        </a>
                    </figure>
                    <div class="article-content">
                        <?php $this->excerpt('220', '...') ?>
                    </div>
                    <a href="<?php $this->permalink() ?>" class="btn btn-success pull-right"><span class="badge"></span>&nbsp;阅读更多</a>
                </section>
            <?php endwhile; ?>
            <?php else: ?>
            <div id="bodyer" class="container">
			    <div class="row">
			        <div class="col-md-8">
			            <div class="alert alert-danger alert-dismissible fade in" role="alert">
			                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			                    <span aria-hidden="true">×</span>
			                </button>
			                <h4>404-Not Found</h4>
			            </div>
			<?php endif; ?>
                <nav class="page-nav"><?php $this->pageNav('«', '»'); ?></nav>
        </div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>