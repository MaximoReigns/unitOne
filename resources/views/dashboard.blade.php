<x-app-layout>
    <livewire:task-list>
    <div class="text-center">
        <h1 class="text-4xl text-gray-700 mb-2 mt-4 uppercase">Portfolio</h1>
        <img class="w-32 h-32 rounded-full mx-auto" src={{ asset('images/profile.jpg') }}>
        <h2 class="text-2xl text-gray-600 ">Máximo Sánchez Conejo</h2>
        <h3 class="text-1xl text-gray-600">Estudiante de Ingeniería en Sistemas Computacionales</h3>
        <h3 class="text-lg text-gray-600">Instituto Tecnológico de Cancún</h3>
        <br>
    </div>
    <div class="text-center">
        <h1 class="text-3xl text-gray-800 mb-2 uppercase">Experience</h1>
        <h2 class="text-2xl text-gray-600">- Frontend Developer Jr. -</h2>
        <ul class="text-lg text-gray-600">
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>Bootstrap</li>
            <li>React</li>
            <li>Angular</li>
            <li>Ionic</li>
            <li>PHP</li>
            <li>Laravel</li>
            <li>Wordpress</li>
        </ul>
        <h2 class="text-2xl text-gray-600 ">- Control de Versiones -</h2>
        <ul class="text-lg text-gray-600">
            <li>Git & Github</li>
        </ul>
        <h2 class="text-2xl text-gray-600 ">- Creador de Prototipos -</h2>
        <ul class="text-lg text-gray-600">
            <li>Adobe XD</li>
        </ul>
        <h2 class="text-2xl text-gray-600 ">- Diseño Gráfico Básico -</h2>
        <ul class="text-lg text-gray-600">
            <li>Adobe Photoshop</li>
            <li>Adobe Ilustrator</li>
        </ul>
        <h2 class="text-2xl text-gray-600 ">- Soporte Tecnico -</h2>
        <ul class="text-lg text-gray-600">
            <li>Configuración de Correos Electrónicos</li>
            <li>Instalación de cableado de redes LAN</li>
            <li>Configuración de Impresoras</li>
            <li>Mantenimiento Preventivo y Correctivo de equipos de computo</li>
            <li>Soporte Técnico a Usuario</li>
        </ul>
    </div>
</x-app-layout>