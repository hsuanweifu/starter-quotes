<?php

/**
 *
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index()
    {
        $record = $this->quotes->last();
        $this->data = array_merge($this->data, $record);

        $this->data['pagebody'] = 'justone';
        $this->render();
    }
}