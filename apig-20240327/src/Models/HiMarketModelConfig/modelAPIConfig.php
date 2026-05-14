<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketModelConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHttpRoute;

class modelAPIConfig extends Model
{
    /**
     * @var string[]
     */
    public $aiProtocols;

    /**
     * @var string
     */
    public $modelCategory;

    /**
     * @var HiMarketHttpRoute[]
     */
    public $routes;
    protected $_name = [
        'aiProtocols' => 'aiProtocols',
        'modelCategory' => 'modelCategory',
        'routes' => 'routes',
    ];

    public function validate()
    {
        if (\is_array($this->aiProtocols)) {
            Model::validateArray($this->aiProtocols);
        }
        if (\is_array($this->routes)) {
            Model::validateArray($this->routes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiProtocols) {
            if (\is_array($this->aiProtocols)) {
                $res['aiProtocols'] = [];
                $n1 = 0;
                foreach ($this->aiProtocols as $item1) {
                    $res['aiProtocols'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelCategory) {
            $res['modelCategory'] = $this->modelCategory;
        }

        if (null !== $this->routes) {
            if (\is_array($this->routes)) {
                $res['routes'] = [];
                $n1 = 0;
                foreach ($this->routes as $item1) {
                    $res['routes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['aiProtocols'])) {
            if (!empty($map['aiProtocols'])) {
                $model->aiProtocols = [];
                $n1 = 0;
                foreach ($map['aiProtocols'] as $item1) {
                    $model->aiProtocols[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['modelCategory'])) {
            $model->modelCategory = $map['modelCategory'];
        }

        if (isset($map['routes'])) {
            if (!empty($map['routes'])) {
                $model->routes = [];
                $n1 = 0;
                foreach ($map['routes'] as $item1) {
                    $model->routes[$n1] = HiMarketHttpRoute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
