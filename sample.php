<?php
/*
 * Name: Simple Class Info YouTube
 * Description: Get Information of YouTube video
 * Development: Guido F. Robertone
 * Site: http://www.zarpele.com.ar
 * License: GNU GENERAL PUBLIC LICENSE (http://www.gnu.org/licenses/gpl.html)
 * Version: 1.0
 */?>
<?php
require_once 'youtube.class.php';

$url = 'http://www.youtube.com/watch?v=5ocq6_3-nEw';
$youtube = new Youtube($url);

//$id = '5ocq6_3-nEw';
//$youtube = new Youtube($id);
?>

<h2>Video Data</h2>
<p>
    <strong>Title: </strong>
    <?php echo $youtube->getTitle()?>
</p>

<p>
    <strong>Valid: </strong>
    <?php var_dump($youtube->valid())?>
</p>

<p>
    <strong>Published: </strong>
    <?php echo $youtube->getPublished()?>
</p>

<p>
    <strong>Updated: </strong>
    <?php echo $youtube->getUpdated()?>
</p>

<p>
    <strong>Category: </strong>
    <?php echo $youtube->getCategory()?>
</p>

<p>
    <strong>Tags: </strong>
    <?php var_dump($youtube->getTags())?>
</p>

<p>
    <strong>Content: </strong>
    <?php echo $youtube->getContent()?>
</p>

<p>
    <strong>Description: </strong>
    <?php echo $youtube->getDescription()?>
</p>

<p>
    <strong>Link: </strong>
    <?php echo $youtube->getUrl()?>
</p>

<p>
    <strong>Imagen: </strong>
    <?php echo $youtube->getImageUrl('default')?><br/>
    <img src="<?php echo $youtube->getImageUrl('default')?>" alt=""/>
    <img src="<?php echo $youtube->getImageUrl(0)?>" alt=""/>
    <img src="<?php echo $youtube->getImageUrl(1)?>" alt=""/>
    <img src="<?php echo $youtube->getImageUrl(2)?>" alt=""/>
    <img src="<?php echo $youtube->getImageUrl(3)?>" alt=""/>
</p>

<h2>Author Data</h2>
<p>
    <strong>Author Name: </strong>
    <?php echo $youtube->getAuthorName()?>
</p>

<p>
    <strong>Author Url: </strong>
    <?php echo $youtube->getAuthorUrl()?>
</p>

<p>
    <strong>Author Uri: </strong>
    <?php echo $youtube->getAuthorUri()?>
</p>

<p>
    <strong>Video: </strong><br/>
    <?php $options = array('autoplay' => 1);?>
    <?php echo $youtube->getEmbeb($options);?>
</p>
