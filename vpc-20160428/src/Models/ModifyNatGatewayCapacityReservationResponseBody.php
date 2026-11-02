<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayCapacityReservationResponseBody\capacityReservationStatus;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayCapacityReservationResponseBody\natGatewayCapacity;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyNatGatewayCapacityReservationResponseBody\natGatewayPerformanceValues;

class ModifyNatGatewayCapacityReservationResponseBody extends Model
{
    /**
     * @var capacityReservationStatus
     */
    public $capacityReservationStatus;

    /**
     * @var int
     */
    public $decreaseRequestsRemaining;

    /**
     * @var natGatewayCapacity
     */
    public $natGatewayCapacity;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var natGatewayPerformanceValues
     */
    public $natGatewayPerformanceValues;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'capacityReservationStatus' => 'CapacityReservationStatus',
        'decreaseRequestsRemaining' => 'DecreaseRequestsRemaining',
        'natGatewayCapacity' => 'NatGatewayCapacity',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayPerformanceValues' => 'NatGatewayPerformanceValues',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->capacityReservationStatus) {
            $this->capacityReservationStatus->validate();
        }
        if (null !== $this->natGatewayCapacity) {
            $this->natGatewayCapacity->validate();
        }
        if (null !== $this->natGatewayPerformanceValues) {
            $this->natGatewayPerformanceValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacityReservationStatus) {
            $res['CapacityReservationStatus'] = null !== $this->capacityReservationStatus ? $this->capacityReservationStatus->toArray($noStream) : $this->capacityReservationStatus;
        }

        if (null !== $this->decreaseRequestsRemaining) {
            $res['DecreaseRequestsRemaining'] = $this->decreaseRequestsRemaining;
        }

        if (null !== $this->natGatewayCapacity) {
            $res['NatGatewayCapacity'] = null !== $this->natGatewayCapacity ? $this->natGatewayCapacity->toArray($noStream) : $this->natGatewayCapacity;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natGatewayPerformanceValues) {
            $res['NatGatewayPerformanceValues'] = null !== $this->natGatewayPerformanceValues ? $this->natGatewayPerformanceValues->toArray($noStream) : $this->natGatewayPerformanceValues;
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
        if (isset($map['CapacityReservationStatus'])) {
            $model->capacityReservationStatus = capacityReservationStatus::fromMap($map['CapacityReservationStatus']);
        }

        if (isset($map['DecreaseRequestsRemaining'])) {
            $model->decreaseRequestsRemaining = $map['DecreaseRequestsRemaining'];
        }

        if (isset($map['NatGatewayCapacity'])) {
            $model->natGatewayCapacity = natGatewayCapacity::fromMap($map['NatGatewayCapacity']);
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatGatewayPerformanceValues'])) {
            $model->natGatewayPerformanceValues = natGatewayPerformanceValues::fromMap($map['NatGatewayPerformanceValues']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
