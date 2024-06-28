@extends('layout.layout')

@section('head')
<link rel="stylesheet" href="{{ asset('css/tasks.css') }}">
@endsection

@section('content')
<main>
    <div class="first-section">
        <div class="main-header">
            <h1>Minhas tarefas</h1>
            <a href="">
                <button class="btn">Adicionar tarefa</button>
            </a>
        </div>
        <details class="filters">
            <summary>Filtros</summary>
            <div class="options">
                <div class="filter-group">
                    <label for="group">Grupo: </label>
                    <select name="group" id="group">
                        <option value="">teste #1</option>
                        <option value="">teste #2</option>
                    </select>
                </div>
                <div class="filter-date">
                    <label for="date">Data: </label>
                    <input type="datetime-local" name="" id="">
                </div>
            </div>
        </details>
        <div class="tasks">
            <div class="category">
                <h3>Em progresso</h3>
                <div class="cards">
                    <div class="card">
                        <div class="task-title">
                            <h4><a href="">OTEC Shop</a></h4>
                            <i>28/03/2024</i>
                        </div>
                        <div class="task-list">
                            <div class="input">
                                <input type="checkbox" name="" id="">
                                <label for="">Fazer tal coisa e bla bla bla bla blassadsadadsdasdasdasadsadasjdasdn</label>
                            </div>
                            <div class="input">
                                <input type="checkbox" name="" id="">
                                <label for="">Fazer outra coisa</label>
                            </div>
                            <div class="input">
                                <input type="checkbox" name="" id="">
                                <label for="">Fazer aquilo lá</label>
                            </div>
                        </div>
                        <div class="task-progress">
                            <p>Progresso: <span>90%</span></p>
                            <div class="progress-bar">
                                <div class="percentage" style="--custom-width: 90%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sequi doloribus neque exercitationem, corrupti quasi, nisi blanditiis, molestiae iusto et quaerat alias. Et voluptatum doloremque odio iusto quaerat maxime suscipit!
                        </p>
                    </div>
                </div>
            </div>
            <div class="category">
                <h3>Concluida</h3>
                <div class="cards">
                    <div class="card">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sequi doloribus neque exercitationem, corrupti quasi, nisi blanditiis, molestiae iusto et quaerat alias. Et voluptatum doloremque odio iusto quaerat maxime suscipit!
                        </p>
                    </div>
                    <div class="card">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sequi doloribus neque exercitationem, corrupti quasi, nisi blanditiis, molestiae iusto et quaerat alias. Et voluptatum doloremque odio iusto quaerat maxime suscipit!
                        </p>
                    </div>
                </div>
            </div>
            <div class="category">
                <h3>URB GRILL</h3>
                <div class="cards">
                    <div class="card">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sequi doloribus neque exercitationem, corrupti quasi, nisi blanditiis, molestiae iusto et quaerat alias. Et voluptatum doloremque odio iusto quaerat maxime suscipit!
                        </p>
                    </div>
                    <div class="card">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui sequi doloribus neque exercitationem, corrupti quasi, nisi blanditiis, molestiae iusto et quaerat alias. Et voluptatum doloremque odio iusto quaerat maxime suscipit!
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="second-section">
        <h2>teste</h2>
    </div>
</main>
@endsection
