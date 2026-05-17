<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\SubscriptionForModify;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\NotifyRouteForSubscription;

class agentConfig extends Model
{
    /**
     * @var string
     */
    public $agentUuid;

    /**
     * @var NotifyRouteForSubscription[]
     */
    public $routes;
    protected $_name = [
        'agentUuid' => 'agentUuid',
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
        if (null !== $this->agentUuid) {
            $res['agentUuid'] = $this->agentUuid;
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
        if (isset($map['agentUuid'])) {
            $model->agentUuid = $map['agentUuid'];
        }

        if (isset($map['routes'])) {
            if (!empty($map['routes'])) {
                $model->routes = [];
                $n1 = 0;
                foreach ($map['routes'] as $item1) {
                    $model->routes[$n1] = NotifyRouteForSubscription::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
