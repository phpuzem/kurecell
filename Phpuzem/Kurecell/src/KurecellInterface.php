<?php
/**
 * Created by PhpStorm.
 * User: phpuzem
 * Date: 20.10.2015
 * Time: 21:03
 */

namespace Phpuzem\Kurecell;


interface KurecellInterface {

    public function setnumbers(array $numbers);

    public function setmessage($message);

    public function sethead($head);


}