<?php

namespace Model;

use Exception;
use Filter\FilterInterface;

class RandomText implements FilterInterface
{
    /**
     * @param $params
     *
     * @return mixed
     * @throws \Exception
     * @internal param $value
     */
    public function filter($params)
    {
        if (count($params) > 1) {
            throw new Exception("RandomText accepts at most a parameter, the number of characters in the string");
        }
        if (empty($params)) {
            $params = [15];
        }
        $length = $params[0];

        $chr = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $chr[rand(0, strlen($chr) - 1)];
        }
        return $randomString;
    }
}
