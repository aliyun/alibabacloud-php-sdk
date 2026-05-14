<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketAgentConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketHttpRoute;

class agentAPIConfig extends Model
{
    /**
     * @var string[]
     */
    public $agentProtocols;

    /**
     * @var HiMarketHttpRoute[]
     */
    public $routes;
    protected $_name = [
        'agentProtocols' => 'agentProtocols',
        'routes' => 'routes',
    ];

    public function validate()
    {
        if (\is_array($this->agentProtocols)) {
            Model::validateArray($this->agentProtocols);
        }
        if (\is_array($this->routes)) {
            Model::validateArray($this->routes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentProtocols) {
            if (\is_array($this->agentProtocols)) {
                $res['agentProtocols'] = [];
                $n1 = 0;
                foreach ($this->agentProtocols as $item1) {
                    $res['agentProtocols'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['agentProtocols'])) {
            if (!empty($map['agentProtocols'])) {
                $model->agentProtocols = [];
                $n1 = 0;
                foreach ($map['agentProtocols'] as $item1) {
                    $model->agentProtocols[$n1] = $item1;
                    ++$n1;
                }
            }
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
