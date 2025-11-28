<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class UpdateStorageDomainRoutingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var RouteItem[]
     */
    public $routes;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'routes' => 'Routes',
        'ruleId' => 'RuleId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->routes) {
            if (\is_array($this->routes)) {
                $res['Routes'] = [];
                $n1 = 0;
                foreach ($this->routes as $item1) {
                    $res['Routes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Routes'])) {
            if (!empty($map['Routes'])) {
                $model->routes = [];
                $n1 = 0;
                foreach ($map['Routes'] as $item1) {
                    $model->routes[$n1] = RouteItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
