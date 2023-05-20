<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to Potato Farm - Batatas</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }
        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }

        label {
            margin-bottom: 1px;
        }

        .error {
            font-size: 14px;
        }

        .calculate-frm input {
            height: 45px;
            width: -webkit-fill-available;
            margin-bottom: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 14px;
            padding-left: 10px;
        }
/* 
        .btn {
            width: 100%;
            height: 45px;
            border-radius: 10px;
            border: 1px solid #ccc;
            background: #ccc;
        } */

        .success-div {
            background: #90EE90;
            margin-top: 20px;
            padding: 20px;
            border-radius: 6px;
            text-align: center;
            color: #000;
            margin: 10px 0;
        }
        .error-div {
            background: #F08080;
            padding: 20px;
            border-radius: 6px;
            text-align: center;
            color: #fff;
        }

        html, body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }
        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }
        .menu {
            padding: .4rem 2rem;
        }
        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }
        header li {
            display: inline-block;
        }
        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }
        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }
        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }
        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }
        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }
        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }
        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }
        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }
        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }
        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }
        .btn-info {
            width: 100%;
            margin-bottom: 10px !important;
        }
        section {
            margin: 0 auto;
            max-width: 500px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }
        section h1 {
            margin-bottom: 2.5rem;
        }
        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }
        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }
        section code {
            display: block;
        }
        section a {
            color: rgba(221, 72, 20, 1);
        }
        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }
        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }
            header .menu-toggle {
                padding: 0 1rem;
            }
            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }
            header .menu-toggle {
                display: block;
            }
            header .hidden {
                display: none;
            }
            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }
            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<header>

    <div class="menu">
        <ul>
            <li class="logo">
                <a href="/" target="_blank">
Potato Farm             </a>
            </li>
            <li class="menu-toggle">
                <button onclick="toggleMenu();">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="/">Home</a></li>
            <li class="menu-item hidden"><a href="/farms">Fazendas</a>
            </li>
            <li class="menu-item hidden"><a href="#">Batatas</a></li>
        </ul>
    </div>

    <div class="heroe">

        <h1>Batatas</h1>

        <h2>Aqui, podes criar um novo tipo de batata.</h2>

    </div>

</header>

<!-- CONTENT -->

<section>

    <h3>Criar novo tipo de batata</h3   >

    <form method="post" id="add_create" name="add_create" action="<?= site_url('/potato/store') ?>">
        <div class=" col-md-right">
                    <div class="contact-form">
                        <div class="form-group">
                          <label class="control-label " for="name">Nome:</label>
                          <div class="">          
                            <input type="text" class="form-control" id="name" placeholder="Tipo" name="name">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label " for="email">Área (m<sup>2</sup>)</label>
                          <div>
                            <input type="number" class="form-control" id="area" step="any" placeholder="Área" name="area">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label " for="email">Tempo de cultivo (dias)</label>
                          <div>
                            <input type="number" class="form-control" id="time" placeholder="Tempo de cultivo" name="time">
                          </div>
                        </div>
                        <div class="form-group">        
                          <div class="">
                            <button type="submit" class="btn btn-info float-right">Submeter</button>
                          </div>
                        </div>
                    </div>
                </div>
    </form>


    <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead>
          <tr>
             <th>Tipo de batata</th>
             <th>Tempo</th>
             <th>Área (m2)</th>
          </tr>
       </thead>
       <tbody>
          <?php if($potatoes): ?>
          <?php foreach($potatoes as $potato): ?>
          <tr>
             <td><?php echo $potato['tipo_batata']; ?></td>
             <td><?php echo $potato['tempo']; ?></td>
             <td><?php echo $potato['espaco']; ?></td>
             <td>
             <a href="<?php echo site_url('potato/delete/'.$potato['id']);?>" class="btn btn-danger btn-sm">Delete</a>
              </td>
          </tr>

         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>

  </div>

</section>

<!-- SCRIPTS -->

<script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_create").length > 0) {
      $("#add_create").validate({
        rules: {
          name: {
            required: true,
          },
          area: {
            required: true,
            min: 0.05,
            number: true,
          },
          time: {
            required: true,
            min: 1,
            number: true
          },

        },
        messages: {
          name: {
            required: "O tipo de batata é obrigatório.",
          },
          area: {
            min: "O minímo de área ocupada por cada batata é 0.05 m/2.",
            required: "A área é obrigatória.",
            number: 'Por favor, insira um número válido para a área.'
          },
          time: {
            required: "O tempo de cultivo é obrigatório.",
            min: "Por favor, insira um número superior a 0.",
            number: 'Por favor, insira um número válido para o tempo de cultivo.'
          },
        },
      })
    }
  </script>
</body>
</html>