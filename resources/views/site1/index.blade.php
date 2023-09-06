
<h1>Home page</h1>


<?php echo ' index page '
// echo --> {{ }}   engin template
?>



{{ ' index page ' }} 


<?php 
echo '<h1>Fisal</h1>';
?>

<h1>
    {{ 'Fisal' }}<h2>are the same</h2>
</h1>



@foreach ($numbers as $n)
 <h3>{{ $n }}</h3><br>
@endforeach

{{'your old minus ten equals ' . $age - 10}}
