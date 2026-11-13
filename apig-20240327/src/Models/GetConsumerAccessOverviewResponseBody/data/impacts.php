<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\impacts\authorizationCounts;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\impacts\gateway;

class impacts extends Model
{
    /**
     * @var authorizationCounts
     */
    public $authorizationCounts;

    /**
     * @var gateway
     */
    public $gateway;

    /**
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'authorizationCounts' => 'authorizationCounts',
        'gateway' => 'gateway',
        'resources' => 'resources',
    ];

    public function validate()
    {
        if (null !== $this->authorizationCounts) {
            $this->authorizationCounts->validate();
        }
        if (null !== $this->gateway) {
            $this->gateway->validate();
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationCounts) {
            $res['authorizationCounts'] = null !== $this->authorizationCounts ? $this->authorizationCounts->toArray($noStream) : $this->authorizationCounts;
        }

        if (null !== $this->gateway) {
            $res['gateway'] = null !== $this->gateway ? $this->gateway->toArray($noStream) : $this->gateway;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['resources'][$n1] = $item1;
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
        if (isset($map['authorizationCounts'])) {
            $model->authorizationCounts = authorizationCounts::fromMap($map['authorizationCounts']);
        }

        if (isset($map['gateway'])) {
            $model->gateway = gateway::fromMap($map['gateway']);
        }

        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['resources'] as $item1) {
                    $model->resources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
