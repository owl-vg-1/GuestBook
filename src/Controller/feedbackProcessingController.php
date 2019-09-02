<?php

namespace App\Controller;

trait feedbackProcessingController 
{

    public function del($id)
    {
        $new_array = $this->get();
        unset($new_array[$id]);
        $this->write_file($new_array);
    }

    public function edit($id, $array)
    {
        $new_array = $this->get();
        $new_array[$id] = $array;
        $this->write_file($new_array);
    }

    public function add($data_array)
    {
        $new_array = $this->get();
        $new_array[] = $data_array;
        $this->write_file($new_array);
    }

}

?>