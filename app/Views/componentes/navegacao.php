
<!-- COMPONENTES -->
<link rel="stylesheet" href="<?= base_url('./componentes/X_Sidebar/X_Sidebar.css') ?>">



<!-- NAVBAR -->
<div
    id="navbar"
    style="
        width: 100%;
        height: 3.5rem;

        position: absolute;
        top: 0;
        left: 0;

        display: flex;
        justify-content: space-between;
        align-items: center;

        color: #fff;

        background-color: #047;
        border-bottom: solid 1px #bbb;
    "
>

    <h1
        style="
            margin-left: 6.5rem;
            font-size: 2rem;
        "
    >LOGO EMPRESA</h1>

    <a
        id="btn-logout"
        href="#"
        style="
            margin-right: 1rem;
            font-size: 2rem;
            border: solid 1px #ccc;
        "
    ><i class="bi bi-box-arrow-right"></i></a>

</div>
<!-- NAVBAR -->



<!-- SIDEBAR -->
<x-sidebar
    id="sidebar"
    x-opcoes='
    {
        "1": {"icone": "bi bi-bezier2", "titulo": "Dabudi", "rota": "https://www.youtube.com"},
        "2": {"icone": "bi bi-box-seam-fill", "titulo": "Topedo", "rota": "https://www.google.com"},
        "3": {"icone": "bi bi-database-fill-gear", "titulo": "Buteta", "rota": "https://www.excalidraw.com"}
    }'
></x-sidebar>
<!-- SIDEBAR -->



<!-- CONTEUDO -->
<div
    id="conteudo"
    style="
        width: calc(100% - 4.5rem);
        height: calc(100% - 4.5rem);

        display: flex;
        justify-content: center;
        align-items: center;

        position: absolute;
        top: 4rem;
        left: 4rem;

        background-color: #fff;
        border-radius: 0.25rem;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    "
>