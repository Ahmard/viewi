<?php

function RenderAppComponent_Slot10(
    AppComponent $component,
    PageEngine $pageEngine,
    array $slots
    , ...$scope
) {
    $slotContents = [];
    ?>
            <span>render inside <?=htmlentities($component->model)?></span>
        <?php   
}