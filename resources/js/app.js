import './bootstrap';
import 'tinymce/tinymce';
import 'tinymce/skins/ui/oxide/skin.min.css';
import 'tinymce/skins/content/default/content.min.css';
import 'tinymce/skins/content/default/content.css';
import 'tinymce/icons/default/icons';
import 'tinymce/themes/silver/theme';
import 'tinymce/models/dom/model';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.addEventListener('DOMContentLoaded', () => {
    tinymce.init({
        selector: 'textarea',
        language_url: '/assets/js/tinymce/langs/ru.js',
        language: 'ru',

        /* TinyMCE configuration options */
        skin: false,
        content_css: false
    });
});
