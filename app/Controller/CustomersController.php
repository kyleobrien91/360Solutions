<?php
/**
 * Customers controller.
 *
 * This file will render views from /View/Customers
 *
 * PenguinApp: Cellular Deals Management (http://cakephp.org)
 * Copyright (c) Kyle O'Brien. (http://www.kyleobrien.co.za)
 *
 * All copyright licensing is retained as private and proprietary
 *
 * @copyright     Copyright (c) Kyle O'Brien. (http://www.kyleobrien.co.za)
 * @link          http://www.kyleobrien.co.za Kyle O'Brien
 * @package       app.Controller
 * @since         PenguinApp v 0.1.1
 */

App::uses('AppController', 'Controller');

class CustomersController extends AppController {


    /**
     * Handles business logic for the customer index view @ /View/Customers/index.ctp
     *
     * Displays a list of customers registerd in the system
     */
    public function index()
    {

    }


    /**
     * Handles business logic for the customer add view @ /View/Customers/add.ctp
     */
    public function add()
    {

    }


    /**
     * Handles business logic for the customer edit view @ /View/Customers/edit.ctop
     * @param  String $customerId Id of the customer to edit
     * @return NULL
     */
    public function edit( $customerId )
    {

    }
}
