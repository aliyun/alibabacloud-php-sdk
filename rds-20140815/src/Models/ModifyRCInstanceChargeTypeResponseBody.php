<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\ModifyRCInstanceChargeTypeResponseBody\feeOfInstances;

class ModifyRCInstanceChargeTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string[]
     */
    public $expiredTime;

    /**
     * @var feeOfInstances[]
     */
    public $feeOfInstances;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'expiredTime' => 'ExpiredTime',
        'feeOfInstances' => 'FeeOfInstances',
        'instanceIds' => 'InstanceIds',
        'orderId' => 'OrderId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->expiredTime)) {
            Model::validateArray($this->expiredTime);
        }
        if (\is_array($this->feeOfInstances)) {
            Model::validateArray($this->feeOfInstances);
        }
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->expiredTime) {
            if (\is_array($this->expiredTime)) {
                $res['ExpiredTime'] = [];
                $n1 = 0;
                foreach ($this->expiredTime as $item1) {
                    $res['ExpiredTime'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->feeOfInstances) {
            if (\is_array($this->feeOfInstances)) {
                $res['FeeOfInstances'] = [];
                $n1 = 0;
                foreach ($this->feeOfInstances as $item1) {
                    $res['FeeOfInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
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
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['ExpiredTime'])) {
            if (!empty($map['ExpiredTime'])) {
                $model->expiredTime = [];
                $n1 = 0;
                foreach ($map['ExpiredTime'] as $item1) {
                    $model->expiredTime[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FeeOfInstances'])) {
            if (!empty($map['FeeOfInstances'])) {
                $model->feeOfInstances = [];
                $n1 = 0;
                foreach ($map['FeeOfInstances'] as $item1) {
                    $model->feeOfInstances[$n1] = feeOfInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
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
