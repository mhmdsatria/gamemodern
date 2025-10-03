<script src="https://cdn.tailwindcss.com"></script>

<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Menyembunyikan scrollbar untuk pengalaman yang lebih baik di area game */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
 <!-- Navigasi Header -->
    <header class="bg-slate-/80 backdrop-blur-lg sticky top-0 z-50 border-b border-slate-700/50">
        <nav class="container mx-auto px-40 sm:px-56 flex justify-between items-center py-4">
            <a href="{{CONFIG_SITE_URL}}/" class="text-2xl font-bold text-cyan-400 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="currentColor">
                 <path d="M16.5,9L13.5,12L16.5,15H22V9M9,16.5V22H15V16.5L12,13.5M7.5,9H2V15H7.5L10.5,12M9,7.5V2H15V7.5L12,10.5L9,7.5Z" />
            </svg>
            
            <span>{{CONFIG_SITE_NAME}}</span>
            </a>
            <div class="hidden md:flex items-center space-x-8 text-lg">
                <a href="{{CONFIG_SITE_URL}}/" class="font-bold text-slate-300 hover:text-cyan-400 transition-colors duration-300">Home</a>
                <a href="{{CONFIG_SITE_URL}}/categories" class="font-bold text-slate-300 hover:text-cyan-400 transition-colors duration-300">Category</a>
                <a href="{{CONFIG_SITE_URL}}/about" class="font-bold text-slate-300 hover:text-cyan-400 transition-colors duration-300">About</a>
                <a href="{{CONFIG_SITE_URL}}/tags" class="font-bold text-slate-300 hover:text-cyan-400 transition-colors duration-300">Contact</a>
            </div>
        </nav>
    </header>
    



