<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class RouteConfig extends Model
{
    /**
     * @var PathConfig[]
     */
    public $routes;
    protected $_name = [
        'routes' => 'routes',
    ];

    public function validate()
    {
        if (\is_array($this->routes)) {
            Model::validateArray($this->routes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->routes) {
            if (\is_array($this->routes)) {
                $res['routes'] = [];
                $n1            = 0;
                foreach ($this->routes as $item1) {
                    $res['routes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['routes'])) {
            if (!empty($map['routes'])) {
                $model->routes = [];
                $n1            = 0;
                foreach ($map['routes'] as $item1) {
                    $model->routes[$n1++] = PathConfig::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
