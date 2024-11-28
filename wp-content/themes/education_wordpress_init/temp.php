




<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');
// добавить новое действие во время выполненеия какого-либо действия.
// Также могут выолняться после каких-либо действий. Все хуки делятся на 2 большие группы. Фильтры и события, дейтсвия.
// Фильтры получают значения изменяют и возвращают. А события просто срабатывают.
// Всего хуков в wp примерно 2000. Но также можно создавать и свои.


function childhood_scripts() {
    wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );

    wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};

?>

<!-- хуки – возможность подцепиться к возможностям вордпресса -->


<!-- включение  функции кастомного логотипа -->
<?php 
add_theme_support('custom-logo');
?>




<!-- логотип -->
 один из способов это 
 the_custom_logo() 
Делает ссылку из логотипа 

другой способ подключения логотипа


<a href="<?php echo get_home_url()?>" class="header__logo">
    <img src="<?php $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
echo $custom_logo__url[0];?>" alt="Мир детства" class="header__logo-img">
</a>





<?php
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);

function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ( $args->menu === 'Main' ) {
        $atts['class'] = 'header__nav-item';

        if ( $item->current ) {
            $atts['class'] .= ' header__nav-item-active';
        }

        if ( $item->ID === 106 && ( in_category('soft_toys' ) || in_category('edu_roys'))) {
            $atts['class'] .= 'header__nav-itemactive';
        }
    }

    return $atts;
};

?>






<!-- Рабочий хук-событие -->
<?php 
function print_hello() {
    echo 'hello world' . '<br>';
};
function print_hello_1() {
    echo 'hello world_1' . '<br>';
};
function print_hello_2() {
    echo 'hello world_2' . '<br>';
};

add_action('my_hook', 'print_hello', 10);
add_action('my_hook', 'print_hello_1', 15);
add_action('my_hook', 'print_hello_2', 5);
// к одному хуку можно привязывать много функций
// у add_action есть приоритете по дефолту он равен 10, чем выше число тем позднее действие будет выполняться.
do_action('my_hook');
// do_action() всегда должна стоять после создания хука и его привязки к названию хука.
?>


<!-- Также можно передавать аргументы -->
<?php
function print_hello_with_parameters($text, $name) {
    echo 'Hello world arguments' . $text . ' ' . $name; 
};

add_action('my_hook_2', 'print_hello_with_parameters', 10, 2);

do_action('my_hook_2', 'dear customer', 'Ivan');
// в do_action в таком случае необходимо задать аругменты для вывода
?>





<!-- хуки-фильтры -->
 <!-- apply_filters(название, функция, приоритет, аргументы) -->

<?php
function my_filter_function($str) {
    return 'Hello, Customer' . $str;
};

add_filter('my_filter_hook', 'my_filter_function');
// если аргумент 1, то прописывать его не надо.

echo apply_filters( 'my_filter_hook', '<br> hellooo world' );

// Если хук уже сдеал, все, что от него требовалось, то его можно удалить.
// remove_filter;() или remove_action(); Работают одинаково.
// Если при создании фильтра или события: ему выставлен приоритет, 
// то при удалении необходимо поставить в приоритете remove точно такое же число, за исключением 10, 
// так как по умолчанию, иначе фильтр или событие не будут удалены.
remove_filter('my_filter_hook', 'my_filter_function');
// Правильнее сказать, что от хука открепляется функция, которая была к нему привязана.
echo apply_filters( 'my_filter_hook', '<br> hello world' );
?>














<?php
if($field == '2Gis_maps'){
                                    ?>
                                   <iframe class="contacts__map" src="<?php the_field('lat_long_field_2gis');?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <?php
                                 }
                                 ?>