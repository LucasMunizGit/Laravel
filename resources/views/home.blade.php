<x-layout>
    <main class="py-10">
        <h1>
            Veja seus hábitos e metas de forma simples e prática.
        </h1> 
        @auth()
            Bem vindo, {{ auth()->user()->name }}. <a href="/logout">Sair</a>
        @endauth
    </main>
</x-layout>