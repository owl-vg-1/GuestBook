<?php

namespace App\Controller;

trait phpProcessingController 
{
    use feedbackProcessingController;

    function get_php()
    {
        return include($this->file_name);
    }

    function write_file_php(array $data_array)
    {

        file_put_contents($this->file_name, '<?php return '.var_export($data_array, true).';');

    }

}

?>