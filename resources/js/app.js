import './bootstrap';
import 'flowbite';

import Alpine from 'alpinejs';
import Persist from '@alpinejs/persist';

Alpine.plugin(Persist);

Alpine.start();

window.Alpine = Alpine;