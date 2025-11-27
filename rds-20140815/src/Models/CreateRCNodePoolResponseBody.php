<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class CreateRCNodePoolResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $instanceIdSets;

    /**
     * @var string
     */
    public $nodePoolId;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceIdSets' => 'InstanceIdSets',
        'nodePoolId' => 'NodePoolId',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIdSets)) {
            Model::validateArray($this->instanceIdSets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIdSets) {
            if (\is_array($this->instanceIdSets)) {
                $res['InstanceIdSets'] = [];
                $n1 = 0;
                foreach ($this->instanceIdSets as $item1) {
                    $res['InstanceIdSets'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodePoolId) {
            $res['NodePoolId'] = $this->nodePoolId;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['InstanceIdSets'])) {
            if (!empty($map['InstanceIdSets'])) {
                $model->instanceIdSets = [];
                $n1 = 0;
                foreach ($map['InstanceIdSets'] as $item1) {
                    $model->instanceIdSets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NodePoolId'])) {
            $model->nodePoolId = $map['NodePoolId'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
