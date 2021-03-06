<?php
/**
 * Created by PhpStorm.
 * User: esolaimani
 * Date: 27.02.2019
 * Time: 22:55
 */

namespace src\controller\pages;
use src\controller;

/**
 * Class Enqueue
 * @package src\controller
 */
class Enqueue extends controller\BaseController
{
    /**
     *
     */
    public function register() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    /**
     *
     */
    function enqueue() {
        // enqueue all our scripts
        wp_enqueue_style( 'pluginstyle', $this->plugin_url . 'public/stylesheets/style.css' );
        wp_enqueue_script( 'pluginscript', $this->plugin_url . 'public/javascripts/script.js' );
    }
}