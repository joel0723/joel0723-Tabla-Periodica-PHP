<?php 
$Pri=['H'];
$segu=['Li','Na','K','Rb','Cs','Fr'];
$ter=['Be','Mg','Ca', 'Sr', 'Ba', 'Ra'];
$cua=['Sc', 'Ti', 'V', 'Cr', 'Mn', 'Fe', 'Co', 'Ni', 'Cu', 'Zn'];
$quin=['Y', 'Zr', 'Nb', 'Mo', 'Tc', 'Ru', 'Rh', 'Pd', 'Ag'];
$sex=['La-Lu'];
$sep=['Ac-Lr'];
$oct=['Hf', 'Ta', 'W', 'Re', 'Os', 'Ir', 'Pt', 'Au', 'Hg'];
$nov=['Cd'];
$dec=['Rf', 'Db', 'Sg', 'Bh', 'Hs', 'Mt', 'Ds'];
$rg=['Rg', 'Cn'];
$al=['Al', 'Ga', 'In', 'Tl', 'Nh'];
$br=['Br'];
$fl=['Fl', 'Mc', 'Lv'];
$flu=['F', 'Cl', 'Br', 'I', 'At', 'Ts'];
$he=[ 'He','Ne','Ar','Kr', 'Xe', 'Rn', 'Og'];
$sn=['Sn', 'Pb'];
$bi=['Bi'];
$c=['C', 'N', 'O'];
$s=['S', 'Se'];
$p=['P'];
$si=['Si', 'Ge'];
$as=['As', 'Sb'];
$te=['Te','Po'];
$la=['La', 'Ce', 'Pr', 'Nd', 'Pm', 'Sm', 'Eu', 'Gd', 'Tb', 'Dy', 'Ho', 'Er', 'Tm', 'Yb', 'Lu'];
$ac=['Ac', 'Th', 'Pa', 'U'];
$np=['Np', 'Pu', 'Am', 'Cm', 'Bk', 'Cf', 'Es', 'Fm', 'Md', 'No', 'Lr'];




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="h1">Tabla periodica</h1>

    <div>
      <table>
  <tr>
    <th style="background: gray">--Metales--</th>
    <th rowspan = "7" style ="background-color: rgb(64, 114, 22);">--Metaloides--</th>
    <th style="background: gray">--No Metales--</th>
  </tr>
  <tr>
    <td style="background: blueviolet">Alcalinos</td>
    <td style="background: aqua">Otros no metales</td>
  </tr>
  <tr>
    <td style="background: darkorchid">Alcalinoterros</td>
    <td style="background: rgb(101, 171, 228)">Holagenos</td>
  </tr>
  <tr>
    <td style="background: rgb(241, 179, 9)">Metales de Transcision</td>
    <td style="background: rgb(62, 155, 231)">Gases Nobles</td>
  </tr>
  <tr>
    <td style="background: sandybrown">Lantanidos</td>
  </tr>
  <tr>
    <td style="background: rgb(214, 86, 27)">Actinidos</td>
  </tr>
  <tr>
    <td style="background: rgb(241, 237, 9)">Otros Metales</td>
  </tr>
</table>
</div>

<div class="arriba">

</div>

<?php foreach($Pri as $fila): ?>
        
        <div class="columnas">  <?php echo("<span> {$fila} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($segu as $fila2): ?>
        
        <div class="alcalinos">  <?php echo("<span> {$fila2} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($ter as $fila3): ?>
        
        <div class="alcalinoterros">  <?php echo("<span> {$fila3} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($cua as $fila4): ?>
        
        <div class="sr">  <?php echo("<span> {$fila4} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($quin as $fila5): ?>
        
        <div class="y">  <?php echo("<span> {$fila5} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($sex as $fila6): ?>
        
        <div class="la">  <?php echo("<span> {$fila6} </span>")  ?> </div>
          
      <?php endforeach?>

      
      <?php foreach($sep as $fila7): ?>
        
        <div class="ac">  <?php echo("<span> {$fila7} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($oct as $fila8): ?>
        
        <div class="hf">  <?php echo("<span> {$fila8} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($nov as $fila9): ?>
        
        <div class="cd">  <?php echo("<span> {$fila9} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($dec as $fila10): ?>
        
        <div class="rf">  <?php echo("<span> {$fila10} </span>")  ?> </div>
          
      <?php endforeach?>
      
      <?php foreach($rg as $fila11): ?>
        
        <div class="rg">  <?php echo("<span> {$fila11} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($al as $fila12): ?>
        
        <div class="al">  <?php echo("<span> {$fila12} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($br as $fila13): ?>
        
        <div class="br">  <?php echo("<span> {$fila13} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($fl as $fila14): ?>
        
        <div class="fl">  <?php echo("<span> {$fila14} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($flu as $fila15): ?>
        
        <div class="flu">  <?php echo("<span> {$fila15} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($he as $fila16): ?>
        
        <div class="he">  <?php echo("<span> {$fila16} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($sn as $fila17): ?>
        
        <div class="sn">  <?php echo("<span> {$fila17} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($bi as $fila18): ?>
        
        <div class="bi">  <?php echo("<span> {$fila18} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($c as $fila19): ?>
        
        <div class="c">  <?php echo("<span> {$fila19} </span>")  ?> </div>
          
      <?php endforeach?>

      
      <?php foreach($s as $fila20): ?>
        
        <div class="s">  <?php echo("<span> {$fila20} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($p as $fila21): ?>
        
        <div class="p">  <?php echo("<span> {$fila21} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($si as $fila22): ?>
        
        <div class="si">  <?php echo("<span> {$fila22} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($as as $fila23): ?>
        
        <div class="as">  <?php echo("<span> {$fila23} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($te as $fila24): ?>
        
        <div class="te">  <?php echo("<span> {$fila24} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($la as $fila25): ?>
        
        <div class="lan">  <?php echo("<span> {$fila25} </span>")  ?> </div>
          
      <?php endforeach?>

      <?php foreach($ac as $fila26): ?>
        
        <div class="act">  <?php echo("<span> {$fila26} </span>")  ?> </div>
          
      <?php endforeach?>
      
      <?php foreach($np as $fila27): ?>
        
        <div class="np">  <?php echo("<span> {$fila27} </span>")  ?> </div>
          
      <?php endforeach?>

     


   




     
      

        
        
      
        

        
      

    
</body>
</html>