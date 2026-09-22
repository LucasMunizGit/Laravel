<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 border-2 mt-4">
            
            <h1 class="font-bold text-3xl mb-4">
                Faça login
            </h1> 

            <p>
                Insira seus dados para acessoar!
            </p>

            <form action="/login" method="POST" class="flex flex-col">
                @csrf

                <div class="flex flex-col gap-2 mb-4">
                    <label for="email">
                        Email
                    </label>
                    <input
                        type="email" 
                        name="email"
                        placeholder="xablau@exemplo.com"
                        class="bg-white p-2 border-2 @error('email') border-red-500 @enderror"
                    >
                    
                        @error('email')
                            <p class="text-red-500 text-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                
                    <div class="flex flex-col gap-2 mb-4">
                        <label for="password">
                            Senha
                        </label>
                    <input
                        type="password"
                        name="password"
                        placeholder="*****************"
                        class="bg-white p-2 border-2"
                    >
                </div>

                <button 
                    type="submit"
                    class="bg-white p-2 border-2"
                >
                    Entra. VAI, Aiinnn... la ele.
                </button>

            </form>   

        </section>

    </main>
    
</x-layout>