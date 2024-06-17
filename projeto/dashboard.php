<?php
session_start();
if (empty($_SESSION)) {
    print "<script>location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            opacity: 0.7;
        }

        .logo {
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background: #23232e;
            height: 8vh;
        }

        .main {
            background: url("") no-repeat center center;
            background-size: cover;
            height: 92vh;
        }

        .nav-list {
            list-style: none;
            display: flex;
        }

        .nav-list li {
            letter-spacing: 3px;
            margin-left: 32px;
        }

        .mobile-menu {
            display: none;
            cursor: pointer;
        }

        .mobile-menu div {
            width: 32px;
            height: 2px;
            background: #fff;
            margin: 8px;
            transition: 0.3s;
        }

        @media (max-width: 999px) {
            body {
                overflow-x: hidden;
            }

            .nav-list {
                position: absolute;
                top: 8vh;
                right: 0;
                width: 50vw;
                height: 92vh;
                background: #23232e;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                transform: translateX(100%);
                transition: transform 0.3s ease-in;
            }

            .nav-list li {
                margin-left: 0;
                opacity: 0;
            }

            .mobile-menu {
                display: block;
            }
        }

        .nav-list.active {
            transform: translateX(0);
        }

        @keyframes navLinkFade {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .mobile-menu.activate .line1 {
            transform: rotate(-45deg) translate(-8px, 8px);
        }

        .mobile-menu.activate .line2 {
            opacity: 0;
        }

        .mobile-menu.activate .line3 {
            transform: rotate(45deg) translate(-5px, -7px);
        }
    </style>

</head>

<body>
    <header>
        <nav>
            <a class="logo" href="/">Meu Site</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="#">Início</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>


        <?php
        /*print "Olá, " . $_SESSION["nome"];
        print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
        */ ?>
    </header>
    <main></main>
    <script>

class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${
            index / 7 + 0.3
          }s`);
    });
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".nav-list",
  ".nav-list li",
);
mobileNavbar.init();

      
    </script>
</body>

</html>     