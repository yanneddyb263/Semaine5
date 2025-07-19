<?php
function analyseNotes($notes)
{
    $total = 0;
    foreach ($notes as $note)
    {
        
 $total = $total + $note;
        if ($note >= 16)
{
    echo $note. ' - Excellent <br>';
}
elseif ($note >= 12 AND $note <= 15)
{
    echo $note. ' - Bien <br>';
}
elseif ($note >= 10 AND $note <= 11)
{
    echo $note. ' - Moyen <br>';
}
else
{
    echo $note. ' - Insuffisant <br>';
}

    }
     
    return $total / count($notes) ;
}
$moy = analyseNotes(array(10, 16, 13, 12, 17));
echo "vous moyenne est : $moy";
