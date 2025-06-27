<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceChargeTypeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $instanceGroupIds;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceGroupIds' => 'InstanceGroupIds',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceGroupIds)) {
            Model::validateArray($this->instanceGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceGroupIds) {
            if (\is_array($this->instanceGroupIds)) {
                $res['InstanceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->instanceGroupIds as $item1) {
                    $res['InstanceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceGroupIds'])) {
            if (!empty($map['InstanceGroupIds'])) {
                $model->instanceGroupIds = [];
                $n1 = 0;
                foreach ($map['InstanceGroupIds'] as $item1) {
                    $model->instanceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
