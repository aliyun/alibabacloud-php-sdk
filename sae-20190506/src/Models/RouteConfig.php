<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routes) {
            $res['routes'] = [];
            if (null !== $this->routes && \is_array($this->routes)) {
                $n = 0;
                foreach ($this->routes as $item) {
                    $res['routes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RouteConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['routes'])) {
            if (!empty($map['routes'])) {
                $model->routes = [];
                $n             = 0;
                foreach ($map['routes'] as $item) {
                    $model->routes[$n++] = null !== $item ? PathConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
