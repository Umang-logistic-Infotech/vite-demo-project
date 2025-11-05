import './bootstrap';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import '@popperjs/core/dist/umd/popper.min.js';

// Import Bootstrap Icons CSS locally
import 'bootstrap-icons/font/bootstrap-icons.css';

// Import jQuery
import $ from 'jquery';
window.$ = window.jQuery = $;

// Import DataTables
import 'datatables.net';
import 'datatables.net-dt/css/dataTables.dataTables.css';

// Import Alpine.js (if you're using it)
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();