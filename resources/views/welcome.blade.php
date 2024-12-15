@extends('layouts.default')

@section('content')
    <div class="grid grid-cols-2 gap-4 p-4">
        <x-welcome-card title="WELCOME">
            Our military simulation Arma 3 server aims to establish a small, serious clan dedicated to fostering an enjoyable gaming experience.
            The primary focus is on balancing a structured environment with an emphasis on <span class="text-brand-500">fun</span>.
        </x-welcome-card>
        <x-welcome-card title="MODDED">
            The 317th uses a variety of mods to make the experience enjoyable and overall visually pleasing.
            Our goal with mods is to not have too much so players can easily download and experience the server.
        </x-welcome-card>
        <x-welcome-card title="ABOUT US">
            While we stated in the welcome card we are trying to create a milsim <span class="text-brand-500">('ChillSim')</span> clan that <span class="text-brand-500">focuses primarly on fun and an enjoyable experience</span>.
            We do not host any kind of <span class="text-brand-500">"bootcamp"</span> and do not care about your level of skill.
            If you want to join us with no skill or experience with the platform at all we would love to invite you to come play.
        </x-welcome-card>
        <x-welcome-card title="REQUIREMENTS">
            <ul>
                <li class="text-brand-500">Microphone</li>
                <li class="text-brand-500">Arma 3</li>
                <li class="text-brand-500">Ability to download the mods required for the server</li>
                <li class="text-brand-500">Teamspeak 3</li>
                <li class="text-brand-500">Discord</li>
                <li class="text-brand-500">Good Attitude</li>
                <li class="text-brand-500">Must get along with others</li>
                <li class="text-brand-500">Speak English</li>
            </ul>
        </x-welcome-card>
        <x-welcome-card title="OPPORTUNITIES">
            We have a variety of different battalions that we are looking to grow.
            We support all forms of combat.
            Here are some things we will be looking to have players play and be apart of.
            <br></br>
            <ul>
                <li class="text-brand-500">Infantry</li>
                <li class="text-brand-500">Aviation</li>
                <li class="text-brand-500">Armor</li>
                <li class="text-brand-500">With more to come as needed or requested..</li>
            </ul>
        </x-welcome-card>
        <x-welcome-card title="DEVELOPMENT">
            The owner and creator of this community is the primary dev on this community.
            I plan to integrate this website not only with discord but with the in-game experience as well.

            I am still learning the ropes on Arma 3 as far as development goes but I do have quite an extensive experience with other variants of development.
            I used to primarily work on FiveM and RedM environments while also expanding my skills into the web development world and other platforms.

            My primary languages are
            <span class="text-brand-500">Lua</span>,
            <span class="text-brand-500">Javascript / TypeScript</span>,
            <span class="text-brand-500">C#</span>
        </x-welcome-card>
    </div>
@stop
