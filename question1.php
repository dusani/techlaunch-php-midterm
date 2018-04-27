<?php
function isBitten()
{
    return rand(1,2);
}

if (isBitten() === 1) {
    echo "Lion bit your finger";
} else {
    echo "Lion did not bite your finger!";
}
