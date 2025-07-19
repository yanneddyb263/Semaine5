<?php
$note = 13;
if ($note >= 16)
{
    echo 'Excellent';
}
elseif ($note >= 12 AND $note <= 15)
{
    echo 'Bien';
}
elseif ($note >= 10 AND $note <= 11)
{
    echo 'Moyen';
}
else
{
    echo 'Insuffisant';
}
?>
