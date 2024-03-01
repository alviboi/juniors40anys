<template>
<header>
    <nav
        class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800"
    >
        <div
            class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl"
        >
            <a href="/" class="flex items-center">
                <img
                    src="../../img/logo.jpg"
                    class="mr-3 h-6 sm:h-9"
                    alt="Juniors Logo"
                />
                <span
                    class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
                    style="font-family: 'Gluten'"
                    >Juniors El Carme</span
                >
            </a>
            <div class="flex items-center lg:order-2">
                <a
                    href="login"
                    class="hidden lg:block text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-blue-800"
                    >Secretaria Virtual</a
                >
                <nav
                    class="block lg:hidden md:hidden uk-navbar-container uk-navbar-transparent"
                >
                    <div class="uk-container">
                        <div uk-navbar>
                            <div class="uk-navbar-left">
                                <a
                                    class="uk-navbar-toggle uk-navbar-toggle-animate"
                                    uk-navbar-toggle-icon
                                    href="#"
                                ></a>
                                <div class="uk-navbar-dropdown">
                                    <ul
                                        class="uk-nav uk-navbar-dropdown-nav"
                                    >
                                        <li>
                                            <a
                                                href="/targeto"
                                                aria-current="page"
                                                >Targetó</a
                                            >
                                        </li>
                                        <li>
                                            <a href="/apuntat"
                                                >Apuntar-se</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div
                class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
                id="menu"
            >
                <ul
                    class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0"
                >
                    <li>
                        <a
                            href="/targeto"
                            class="block py-2 pr-4 pl-3 text-white rounded bg-red-700 lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white"
                            aria-current="page"
                            >Targetó</a
                        >
                    </li>
                    <li>
                        <a
                            href="/apuntat"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                            >Apuntar-se</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

</template>
