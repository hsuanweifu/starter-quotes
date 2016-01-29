<?php

/**
 *
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */

class First extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    public function _remap($method, $params = array())
    {
        if($method == 'sleep')
        {
            $this->zzz();
        }
        elseif ($method == 'gimmie')
        {
            return call_user_func_array(array($this, $method), $params);
        }
        else
        {
            $this->index();
        }

    }

    function index()
    {
        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';	// this is the view we want shown

        $this->render();
    }

    function zzz()
    {
        $this->index();
    }

    function gimmie($id)
    {
        $record = $this->quotes->get($id);
        $this->data = array_merge($this->data, $record);
        $this->data['pagebody'] = 'justone';

        $this->render();
    }
}

/* End of file First.php */
/* Location: application/controllers/First.php */

