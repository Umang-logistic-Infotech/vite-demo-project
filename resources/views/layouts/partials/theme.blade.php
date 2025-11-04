@extends('layouts.admin')

@section('title', 'Theme Page')

@section('content')

    <body class="sidebar-expand-lg sidebar-open bg-body-tertiary">

        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Theme Customize</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Theme Customize</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Sidebar Theme</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"
                                            title="Remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select id="sidebar-color-modes" class="form-select form-select-lg"
                                                aria-label="Sidebar Color Mode Select">
                                                <option value="">---Select---</option>
                                                <option value="dark">Dark</option>
                                                <option value="light">Light</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select id="sidebar-color" class="form-select form-select-lg"
                                                aria-label="Sidebar Color Select">
                                                <option value="">---Select---</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="sidebar-color-code" class="w-100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    Check more color in
                                    <a href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank"
                                        class="link-primary">Bootstrap Background Colors</a>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h3 class="card-title">Navbar Theme</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"
                                            title="Remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select id="navbar-color-modes" class="form-select form-select-lg"
                                                aria-label="Navbar Color Mode Select">
                                                <option value="">---Select---</option>
                                                <option value="dark">Dark</option>
                                                <option value="light">Light</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select id="navbar-color" class="form-select form-select-lg"
                                                aria-label="Navbar Color Select">
                                                <option value="">---Select---</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="navbar-color-code" class="w-100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    Check more color in
                                    <a href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank"
                                        class="link-primary">Bootstrap Background Colors</a>
                                </div>
                            </div>
                            <div class="card mt-4">
                                <div class="card-header">
                                    <h3 class="card-title">Footer Theme</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"
                                            title="Remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select id="footer-color-modes" class="form-select form-select-lg"
                                                aria-label="Footer Color Mode Select">
                                                <option value="">---Select---</option>
                                                <option value="dark">Dark</option>
                                                <option value="light">Light</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select id="footer-color" class="form-select form-select-lg"
                                                aria-label="Footer Color Select">
                                                <option value="">---Select---</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="footer-color-code" class="w-100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    Check more color in
                                    <a href="https://getbootstrap.com/docs/5.3/utilities/background/" target="_blank"
                                        class="link-primary">Bootstrap Background Colors</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script>
            const themeBg = [
                'bg-primary',
                'bg-primary-subtle',
                'bg-secondary',
                'bg-secondary-subtle',
                'bg-success',
                'bg-success-subtle',
                'bg-danger',
                'bg-danger-subtle',
                'bg-warning',
                'bg-warning-subtle',
                'bg-info',
                'bg-info-subtle',
                'bg-light',
                'bg-light-subtle',
                'bg-dark',
                'bg-dark-subtle',
                'bg-body-secondary',
                'bg-body-tertiary',
                'bg-body',
                'bg-black',
                'bg-white',
                'bg-transparent',
            ];
            document.addEventListener('DOMContentLoaded', () => {
                const appSidebar = document.querySelector('.app-sidebar');
                const sidebarColorModes = document.querySelector('#sidebar-color-modes');
                const sidebarColor = document.querySelector('#sidebar-color');
                const sidebarColorCode = document.querySelector('#sidebar-color-code');

                document.querySelector('#sidebar-color').innerHTML = themeBg.map((bg) => {
                    return `<option value="${bg}" class="text-${bg}">${bg}</option>`;
                });

                let sidebarColorMode = '';
                let sidebarBg = '';

                function updateSidebar() {
                    appSidebar.setAttribute('data-bs-theme', sidebarColorMode);

                    sidebarColorCode.innerHTML =
                        `<pre><code class="language-html">&lt;aside class="app-sidebar ${sidebarBg}" data-bs-theme="${sidebarColorMode}"&gt;...&lt;/aside&gt;</code></pre>`;
                }

                sidebarColorModes.addEventListener('input', (event) => {
                    sidebarColorMode = event.target.value;
                    updateSidebar();
                });

                sidebarColor.addEventListener('input', (event) => {
                    sidebarBg = event.target.value;

                    themeBg.forEach((className) => {
                        appSidebar.classList.remove(className);
                    });

                    if (themeBg.includes(sidebarBg)) {
                        appSidebar.classList.add(sidebarBg);
                    }

                    updateSidebar();
                });
            });

            document.addEventListener('DOMContentLoaded', () => {
                const appNavbar = document.querySelector('.app-header');
                const navbarColorModes = document.querySelector('#navbar-color-modes');
                const navbarColor = document.querySelector('#navbar-color');
                const navbarColorCode = document.querySelector('#navbar-color-code');


                document.querySelector('#navbar-color').innerHTML = themeBg.map((bg) => {
                    return `<option value="${bg}" class="text-${bg}">${bg}</option>`;
                });

                let navbarColorMode = '';
                let navbarBg = '';

                function updateNavbar() {
                    appNavbar.setAttribute('data-bs-theme', navbarColorMode);
                    navbarColorCode.innerHTML =
                        `<pre><code class="language-html">&lt;nav class="app-header navbar navbar-expand ${navbarBg}" data-bs-theme="${navbarColorMode}"&gt;...&lt;/nav&gt;</code></pre>`;
                }

                navbarColorModes.addEventListener('input', (event) => {
                    navbarColorMode = event.target.value;
                    updateNavbar();
                });

                navbarColor.addEventListener('input', (event) => {
                    navbarBg = event.target.value;

                    themeBg.forEach((className) => {
                        appNavbar.classList.remove(className);
                    });

                    if (themeBg.includes(navbarBg)) {
                        appNavbar.classList.add(navbarBg);
                    }

                    updateNavbar();
                });
            });

            document.addEventListener('DOMContentLoaded', () => {
                const appFooter = document.querySelector('.app-footer');
                const footerColorModes = document.querySelector('#footer-color-modes');
                const footerColor = document.querySelector('#footer-color');
                const footerColorCode = document.querySelector('#footer-color-code');



                document.querySelector('#footer-color').innerHTML = themeBg.map((bg) => {
                    return `<option value="${bg}" class="text-${bg}">${bg}</option>`;
                });

                let footerColorMode = '';
                let footerBg = '';

                function updateFooter() {
                    appFooter.setAttribute('data-bs-theme', footerColorMode);
                    footerColorCode.innerHTML =
                        `<pre><code class="language-html">&lt;footer class="app-footer ${footerBg}" data-bs-theme="${footerColorMode}"&gt;...&lt;/footer&gt;</code></pre>`;
                }

                footerColorModes.addEventListener('input', (event) => {
                    footerColorMode = event.target.value;
                    updateFooter();
                });

                footerColor.addEventListener('input', (event) => {
                    footerBg = event.target.value;

                    themeBg.forEach((className) => {
                        appFooter.classList.remove(className);
                    });

                    if (themeBg.includes(footerBg)) {
                        appFooter.classList.add(footerBg);
                    }
                    updateFooter();
                });
            });
        </script>
    </body>

@endsection
