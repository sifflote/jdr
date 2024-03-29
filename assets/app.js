/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

// You can specify which plugins you need
import { Tooltip, Toast, Popover } from 'bootstrap';

// start the Stimulus application

//import $ from 'jquery';
const $ = require('jquery');
global.$ = global.jQuery = $;
import './bootstrap';


//import 'bootstrap-table';


//const dt = require('datatables.net');
//import 'datatables.net-bs5/js/dataTables.bootstrap5.min';


import 'select2';
