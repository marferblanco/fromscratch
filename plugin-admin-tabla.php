<?php

// Plugin name: Admin-adhérents
// Description: Tableau pour montrer les données des adhérents.
// Version: 1.0.0
// Author: Marta Fernández
// Author uri: https://github.com/Marferblanco-ctrl

// subida a github


function bootstrap() {
    wp_enqueue_style( 'css_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css' );
    wp_enqueue_script('js_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js');
}

add_action('admin_enqueue_scripts', 'bootstrap');

function Pr($p) {
    echo '<pre>';
    print_r($p);
    echo '</pre>';
}

function admin_adherents() {
    // arguments ('titre page', 'titre menu', 'Permis d'accès', 'slug', 'callback function','icon', position)
    add_menu_page('Adherents', 'Adhérents', 'manage_options', 'admin-adherents', 'admin_adherents_main', 'dashicons-format-aside', 1);
}
add_action('admin_menu', 'admin_adherents');

function admin_adherents_main() {
    echo
        '<div class="row m-auto">
                <div class="col">
                    <table class="table table-responsive table-hover table-striped align-middle mt-1">
                        <thead>
                            <tr class="text-white"; style="background-color: rgb(28, 133, 193);">
                              <th scope="col">Structure</th>
                              <th scope="col">Responsable</th>
                              <th scope="col">Téléphone</th>
                              <th scope="col">Email</th>
                              <th scope="col">Secteur</th>
                              <th scope="col">Date expiraton du listing</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>lorem</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                            </tr>
                            <tr>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                            </tr>
                            <tr>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                              <td>Exemple</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>';

}

 ?>
