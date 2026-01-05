<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeCapacityReservationResponseBody\capacityReservationState;
use AlibabaCloud\SDK\Alb\V20200616\Models\DescribeCapacityReservationResponseBody\minimumLoadBalancerCapacity;

class DescribeCapacityReservationResponseBody extends Model
{
    /**
     * @var capacityReservationState[]
     */
    public $capacityReservationState;

    /**
     * @var int
     */
    public $decreaseRequestsRemaining;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var minimumLoadBalancerCapacity
     */
    public $minimumLoadBalancerCapacity;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'capacityReservationState' => 'CapacityReservationState',
        'decreaseRequestsRemaining' => 'DecreaseRequestsRemaining',
        'lastModifiedTime' => 'LastModifiedTime',
        'minimumLoadBalancerCapacity' => 'MinimumLoadBalancerCapacity',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->capacityReservationState)) {
            Model::validateArray($this->capacityReservationState);
        }
        if (null !== $this->minimumLoadBalancerCapacity) {
            $this->minimumLoadBalancerCapacity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityReservationState) {
            if (\is_array($this->capacityReservationState)) {
                $res['CapacityReservationState'] = [];
                $n1 = 0;
                foreach ($this->capacityReservationState as $item1) {
                    $res['CapacityReservationState'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->decreaseRequestsRemaining) {
            $res['DecreaseRequestsRemaining'] = $this->decreaseRequestsRemaining;
        }

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->minimumLoadBalancerCapacity) {
            $res['MinimumLoadBalancerCapacity'] = null !== $this->minimumLoadBalancerCapacity ? $this->minimumLoadBalancerCapacity->toArray($noStream) : $this->minimumLoadBalancerCapacity;
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
        if (isset($map['CapacityReservationState'])) {
            if (!empty($map['CapacityReservationState'])) {
                $model->capacityReservationState = [];
                $n1 = 0;
                foreach ($map['CapacityReservationState'] as $item1) {
                    $model->capacityReservationState[$n1] = capacityReservationState::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DecreaseRequestsRemaining'])) {
            $model->decreaseRequestsRemaining = $map['DecreaseRequestsRemaining'];
        }

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['MinimumLoadBalancerCapacity'])) {
            $model->minimumLoadBalancerCapacity = minimumLoadBalancerCapacity::fromMap($map['MinimumLoadBalancerCapacity']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
