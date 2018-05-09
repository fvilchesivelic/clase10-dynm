<?php include('header.php');?>

<?php
$csv = array_map('str_getcsv', file('https://raw.githubusercontent.com/fvilchesivelic/clase10-dynm/master/data/bobdata.csv'));
      array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
      });
      array_shift($csv);
?>

<main id="bg" role="main" class="container">
<h1 id="bob" class="mb-4">Top 20 Bob</h1>
<h5 id="bob" >Los mejores Episodios de Bob Esponja según  <a target="_blank" href="https://www.ranker.com/list/best-and-funniest-spongebob-episodes-list/reference"> Ranker.com</a> </h5>
<div class="row">

<?php for($t = 0; $t < count($csv); $t++){?>
    <div class="col-sm-4 col-md-3 py-3">
    <h6 class="border-top pt-3"> <b> <?php print $t+1 ?> -  <?php print($csv[$t]['name'])?></b></h6>
    
    <figure style="height:150px; overflow:hidden;">
    
    <img src="
    <?php if ($csv[$t]['foto'] == NULL){
        print ("img/gris.png");
    } else {
        print ($csv[$t]['foto']);
    };?>" 

    class="img-fluid">
    </figure>

	<p><i>Estreno: <?php print ($csv[$t]['date'])?> </i></p>

    </div>
<?php };?>
</div>

</main>
<?php include('footer.php');?>