<?php

namespace Filter;

interface FilterInterface
{
    /**
     * @param $value
     * @param $params
     *
     * @return mixed
     */
    public function filter($params);
}
