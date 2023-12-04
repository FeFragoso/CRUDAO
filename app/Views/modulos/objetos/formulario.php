<link rel="stylesheet" href="<?= base_url('componentes/X_Input/X_Input.css') ?>">



<div
    style="
        width: calc(100% - 1.25rem);
        height: calc(100% - 1.25rem);
    "
>



    <!-- HEADER -->
    <div
        style="
            width: 100%;
            height: 7.5%;

            display: flex;
            justify-content: center;
            align-items: center;
        "
    >

        <div
            style="
                width: calc(100% - 1.25rem);
                height: calc(100% - 1.25rem);

                display: flex;
                justify-content: space-between;
                align-items: center;

                background-color: #ddd;
                border: solid 1px #ccc;
                border-radius: 0.25rem;
                box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
            "
        >

            <h3
                style="
                    margin-left: 1.25rem;

                    font-size: 1.5rem;
                "
            >OBJETO NOME</h3>

        </div>

    </div>
    <!-- HEADER -->



    <!-- CONTEUDO -->
    <div
        style="
            width: 100%;
            height: 82.5%;

            display: flex;
            justify-content: center;
            align-items: center;
        "
    >

        <div
            style="
                width: calc(100% - 1.25rem);
                height: calc(100% - 1.25rem);

                background-color: #ddd;
                border: solid 1px #ccc;
                border-radius: 0.25rem;
                box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;
            "
        >

            <div
                style="
                    margin: 1rem;

                    display: grid;
                    grid-template-columns: 1fr 1fr 1fr;
                    column-gap: 1rem;
                    row-gap: 1rem;
                "
            >

                <?= $operacao ?>

            </div>

        </div>

    </div>
    <!-- CONTEUDO -->



    <!-- FOOTER -->
    <div
        style="
            width: 100%;
            height: 10%;

            display: flex;
            justify-content: center;
            align-items: center;

            background-color: yellow;
        "
    >
    </div>
    <!-- FOOTER -->



</div>