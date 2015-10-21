<?php
/**
 * Created by PhpStorm.
 * User: phpuzem
 * Date: 20.10.2015
 * Time: 20:40
 */

namespace Phpuzem\Kurecell\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Description of KurecellFacade
 *
 * @author phpuzem
 */
class KurecellFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'kurecell';
    }
}