<?php
$phrases = [
    'The secret of getting ahead is getting started!',
    'It is better to keep your mouth closed and let people think you are a fool than to open it and remove all doubt!',
    'Good friends, good books and a sleepy conscience: this is the ideal life!'
];

shuffle($phrases);
$phrase = array_pop($phrases);
