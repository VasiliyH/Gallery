
<div class="content">

<?php

$this->title = 'Create new album'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>

<form method="POST" enctype="multipart/form-data">

    <input type="text" placeholder="Album name" class="write_field" name="album_name" />

    <button class="button" type="submit" name="sumbit"> <span> Create </span></button>

</form>

</div>
