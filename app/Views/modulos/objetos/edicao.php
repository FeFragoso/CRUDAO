<?php
    foreach($campos as $campo) {
?>

    <div
        style="
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        "
    >
        <span
            style="
                width: 100%;
                height: 100%;
            "
        ><?= $campo->OBJETO_COLUNA_DESCRICAO ?></span>
    
        <x-input
            contexto="<?= $campo->OBJETO_COLUNA_TIPAGEM ?>"
            x-id="input"
            x-class="x-input"
            style="
                width: 100%;
                height: 2rem;
            "
        ></x-input>
    </div>

<?php } ?>