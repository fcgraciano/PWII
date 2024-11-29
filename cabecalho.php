<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial do site</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <style>
        div{
            /* border:1px solid; */
            /* margin:1px; */
        }
        </style>
</head>
<body>
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aula PW 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
                Página Inicial
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="produtos.php">
                Produtos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logoff.php">
                Logoff
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="if.php">
                If
            </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bootstrap.php">
                Bootstrap
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="array.php">
                Array
            </a>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/?locale=pt_BR">
                Facebook
            </a>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.instagram.com/">
                Instagram
            </a>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://br.linkedin.com/?src=go-pa&trk=sem-ga_campid.12619604099_asid.149519181115_crid.657343811719_kw.linkedin_d.c_tid.kwd-148086543_n.g_mt.e_geo.9100684&mcid=6821526239111716925&cid=&gad_source=1&gclid=EAIaIQobChMIqYqG8P7AiAMVh0FIAB1_dguXEAAYASAAEgLrAPD_BwE&gclsrc=aw.ds">
                Linkedin
            </a>
        </li>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.tiktok.com/pt-BR/">
                Tiktok
            </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
   

<div class="container">   