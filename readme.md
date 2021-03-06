# ZeroWaste

## Backend

1. `composer install`
2. `Configure .env file`
3. `php artisan key:generate`
4. `php artisan storage:link`
5. `ln -s ../images images` do this in `storage/app/public`
6. `npm install`
7. `npm run prod`
8. `php artisan migrate:fresh --seed`
9. `phpunit`
10. Go to the webpage and use `admin@example.com` and `secret` as the credentials for the admin user.

## Interfaces

### Sass
- [x] [Partials](resources/sass/app.scss)
- [x] [Herencia](resources/sass/landing.scss#L23)
- [x] [Mixins](resources/sass/_grid.scss#L24)
- [x] [Funciones](resources/sass/landing.scss#L18)
- [x] [Estructura de control](resources/sass/_variables.scss#L11)
- [x] [Variables](resources/sass/_variables.scss)
- [x] [Listas o mapas](resources/sass/_grid.scss#L7)

### Bootstrap

- [x] [Contenedor con distintos breakpoints](resources/views/landing.blade.php#L22)
- [x] [Utilidad de borde](resources/views/partials/navbar.blade.php#L3)
- [x] [Margin o padding responsive ](resources/views/private/home.blade.php#L4)
- [x] [Utilidad de texto](resources/views/private/inventory/show.blade.php#L48)
- [x] [Utilidad de imagenes](resources/views/about.blade.php#L22)
- [x] [Utilidad de embed](resources/views/about.blade.php#L18)
- [x] [Utilidad de visibilidad](resources/sass/landing.scss#L22)
- [x] [Tablas](resources/views/about.blade.php#L31)
- [x] [Iconos](resources/js/components/ContactForm.vue)

#### Componentes

Hay varios componentes que necesitan de estar logueado para verlos y otros necesitar estar deslogueados.

- [x] [Alert](resources/views/private/components/alert.blade.php)
- [x] [Badge](resources/views/private/recipe/show.blade.php#L25)
- [x] [Breadcrumb](resources/views/private/recipe/index.blade.php#L4)
- [x] [Buttons](resources/views/private/recipe/create.blade.php#L91)
- [x] [Buttons group](resources/js/components/ContactForm.vue)
- [x] [Card](resources/views/private/components/card.blade.php)
- [x] [Carousel](resources/views/private/components/recipe-showcase.blade.php)
- [x] [Collapse](resources/views/partials/navbar.blade.php#L8)
- [x] [Dropdowns](resources/views/partials/navbar.blade.php#L20)
- [x] [Form](resources/views/private/recipe/create.blade.php#L7)
- [x] [Form validation](resources/views/private/recipe/create.blade.php#L18)
- [x] [Input group](resources/js/components/ContactForm.vue)
- [x] [Jumbotron](resources/views/landing.blade.php#L4)
- [x] [List group](resources/js/components/NotificationReaderComponent.vue#L22)
- [x] [Media object](resources/views/about.blade.php#L21)
- [x] [Modal](resources/views/private/inventory/show.blade.php#L35)
- [x] [Navs](resources/views/about.blade.php#L8)
- [x] [Navbar](resources/views/partials/navbar.blade.php)
- [x] [Pagination](resources/views/private/inventory/show.blade.php#L53)
- [x] [Popover](resources/js/components/NotificationReaderComponent.vue#L7)
- [x] [Scrollspy](resources/views/landing.blade.php#L23)
- [x] [Spinners](resources/js/components/NotificationReaderComponent.vue#L17)
- [x] [Tooltips](resources/views/partials/navbar.blade.php#L3)
- [x] [Progress](resources/js/components/ContactForm.vue)
