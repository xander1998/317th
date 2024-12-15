<div class="flex w-full max-h-20 border-b-2 hover:bg-default-background">
    <!-- LOGO --> <!-- NAME --> <!-- ROUTES -->
    <div class="flex w-1/3 items-center">
        <img class="h-full p-1" src="{{ URL::to('images/logos/Base.png') }}" alt="Logo">
        <span class="hidden lg:block">317th Hoosier Brigade</span>
        <span class="block lg:hidden">317th</span>
    </div>

    <div class="flex items-end gap-4 justify-center w-2/3">
        <div class="border-2 border-b-0 p-2 rounded-t-xl hover:text-brand-500 hover:border-brand-500 hover:cursor-pointer transition-colors">Home</div>
        <div class="border-2 border-b-0 p-2 rounded-t-xl hover:text-brand-500 hover:border-brand-500 hover:cursor-pointer transition-colors">Roster</div>
        <div class="border-2 border-b-0 p-2 rounded-t-xl hover:text-brand-500 hover:border-brand-500 hover:cursor-pointer transition-colors">About Us</div>
        <div class="border-2 border-b-0 p-2 rounded-t-xl hover:text-brand-500 hover:border-brand-500 hover:cursor-pointer transition-colors">Mods</div>
    </div>

    <div class="flex w-1/5 justify-center items-center">
        @auth
            <button><a href="/auth/discord/logout">LOGOUT!</button>
        @endauth
        @guest
            <button><a href="/auth/discord/redirect">Login</a></button>
        @endguest
    </div>
</div>
