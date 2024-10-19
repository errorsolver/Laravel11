<x-cv-normal-layout>
    {{-- Web title --}}
    <x-slot:title>
        Portofolio
    </x-slot:title>
    <hr>
    {{-- Header --}}
    <x-cv-hero>
        <x-slot:name>Vincentius Hadianta Wibawa</x-slot:name>
    </x-cv-hero>
    <main class="font-sans m-auto max-w-screen-md">
        <hr>
        {{-- Profile --}}
        <x-cv-testimonial>
            <h3
                class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
                Profile
            </h3>
            An enthusiastic informatics engineering undergraduate with a strong passion for web development and software
            engineering. Familiar with programming languages such as HTML, CSS, JavaScript, Golang, and C++, and
            frameworks
            like Gin and GORM. Eager to apply problem-solving skills in real-world projects and grow within a
            collaborative
            environment.
        </x-cv-testimonial>
        <hr>
        {{-- Education --}}
        <x-cv-testimonial>
            <h3
                class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
                Education
            </h3>
            <h4 class="text-2xl font-medium text-gray-900 dark:text-white">
                Dian Nuswantoro Semarang University
            </h4>
            <b>
                2023 - Present
            </b>
            <p class="text-base font-medium text-gray-900 dark:text-white">
                Informatics Engineering
            </p>
            <p class="text-base font-medium text-gray-900 dark:text-white">
                Cumulative GPA: 3.91
            </p>
        </x-cv-testimonial>
        <hr>
        {{-- Rechical Skill --}}
        <x-cv-tech-list />
        <hr>
        {{-- Project Experience --}}
        <x-cv-body-image>
            <x-slot:link>https://messanger-apps.fly.dev/</x-slot:link>
            <x-slot:title>Messanger App</x-slot:title>
            <x-slot:desc>MessagerApp is a dynamic messaging platform designed to connect people across the globe.
                Whether you're looking to meet new people or exchange messages with strangers, MessagerApp offers a
                seamless, user-friendly experience. Using Javascript, ExpressJS, and PostgreSQL.</x-slot:desc>
            <x-slot:img>img/portofolio/MessangerApp.png</x-slot:img>
            <x-slot:class></x-slot:class>
        </x-cv-body-image>
        <x-cv-body-image>
            <x-slot:link>https://vincentius-hadianta-wibawa.fly.dev/posts</x-slot:link>
            <x-slot:title>News App</x-slot:title>
            <x-slot:desc>API provides news listings and detailed articles, with sorting options by tags or
                author names. Each news item includes title, content, author, publication date, and tags. It supports
                dynamic filtering and is easy to integrate with front-end or mobile apps.</x-slot:desc>
            <x-slot:img>img/portofolio/NewsApp.png</x-slot:img>
            <x-slot:class>order-first</x-slot:class>
        </x-cv-body-image>
        {{-- Certification List --}}
        {{-- <x-cv-cert-list></x-cv-cert-list> --}}
    </main>
    <x-cv-footer />
</x-cv-normal-layout>
