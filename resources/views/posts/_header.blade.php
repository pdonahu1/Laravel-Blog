<header class="max-w-xl mx-auto mt-8 text-center">
    <h1 class="text-4xl mt-4">
        Latest <span class="text-blue-500">Laravel / bs5Projects</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-10">
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-category-dropdown />
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text"
                       name="search"
                       placeholder="Search"
                       class="bg-transparent placeholder-light font-semibold text-sm px-3 py-1"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
    </div>
</header>
