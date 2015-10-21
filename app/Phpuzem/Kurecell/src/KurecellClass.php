<?php
/**
 * Created by PhpStorm.
 * User: phpuzem
 * Date: 20.10.2015
 * Time: 20:55
 */

namespace Phpuzem\Kurecell;

use Config;

class KurecellClass implements KurecellInterface {

    protected $numbers;
    protected $message;
    protected $head;
    protected $data;


    protected function process($Url, $strRequest)
    {
        $ch = curl_init();
        $data = http_build_query($strRequest);
        curl_setopt($ch, CURLOPT_URL, $Url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }

    /**
     * @param array $numbers
     * @return $this
     */
    public function setnumbers(array $numbers)
    {
        $this->numbers = $numbers;

        return $this;
    }


    /**
     * @param $message
     * @return $this
     */
    public function setmessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param $head
     * @return $this
     */
    public function sethead($head)
    {
        $this->head = $head;

        return $this;
    }

    /**
     *
     */
    protected function setdata()
    {
        

        $data = [
            'apiNo'     => 1,
            'user'      => Config::get('kurecell.user'),
            'pass'      => Config::get('kurecell.pass'),
            'mesaj'     => $this->message,
            'numaralar' => $this->numbers,
            'baslik'    => $this->head
        ];
        $this->data = $data;
    }

    public function send()
    {
        $this->setdata();
        $this->process("http://kurecell.com.tr/kurecellapiV2/api-center/", $this->data);
    }


}