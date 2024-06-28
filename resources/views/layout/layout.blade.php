<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('head')
</head>
<body>

    <a href="">
        <div id="create-float-button">
            <i class="fa-solid fa-plus"></i>
        </div>
    </a>
    <div id="create-modal" class="modal-wrap">
        <div class="overflow"></div>
        <form class="modal" action="" method="POST">
            @csrf
            <div class="section header">
                <span class="header-text">Criar nova tarefa</span>
                <span class="close-modal">
                    <i class="fa-solid fa-xmark"></i>
                </span>
            </div>
            <div class="section body">
                <div class="input-field">
                    <label for="task-name">Nome da tarefa:</label>
                    <input type="text" name="name" id="task-name">
                </div>
                <div class="input-field">
                    <label for="task-name">Nome da tarefa:</label>
                    <input type="text" name="name" id="task-name">
                </div>
            </div>
            <div class="section footer">
                <button>Enviar</button>
            </div>
        </form>
    </div>

    <aside id="menu" class="menu">
        <div class="close-button" id="close-button">
            <i class="fa-solid fa-bars"></i>
        </div>
        <ul class="links">
            <li>
                <a href="{{ route('dashboard') }}">
                    <div class="icons">
                        <i class="fa-solid fa-house"></i>
                        <p>Home</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('tasks') }}">
                    <div class="icons">
                        <i class="fa-solid fa-list"></i>
                        <p>Lista</p>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div class="icons">
                        <i class="fa-solid fa-house"></i>
                        <p>Home</p>
                    </div>
                </a>
            </li>
        </ul>
    </aside>
    <div class="container">
        <header>
            <div class="begining">
                <h2>Welcome back!</h2>
                <span>Home > tarefas</span>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Faça aqui sua pesquisa">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="profile">
                <div class="profile-image">
                    <img src="img/gumbo.jpg" alt="">
                </div>
                <details>
                    <summary>Details</summary>
                    <ul>
                        <li><a href="#">Item 1</a></li>
                        <li><a href="#">Item 2</a></li>
                        <li><a href="#">Item 3</a></li>
                    </ul>
                </details>
            </div>
        </header>

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#close-button').click(function() {
                $('#menu').toggleClass('active')
            });

            // Modal
            $('#create-float-button').click(function(e) {
                e.preventDefault()
                $('#create-modal').addClass('active');
            });
            $('.overflow').click(function(e) {
                $('.modal-wrap').removeClass('active');
            });
            $('.close-modal').click(function(e) {
                $('.modal-wrap').removeClass('active');
            });
        });
    </script>
    @yield('script')
</body>
</html>
