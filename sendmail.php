<?php
file_put_contents('contacted/'.time().'.txt', json_encode($_REQUEST));
?>