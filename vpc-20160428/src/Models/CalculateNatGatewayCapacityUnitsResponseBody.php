<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CalculateNatGatewayCapacityUnitsResponseBody\natGatewayCapacity;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CalculateNatGatewayCapacityUnitsResponseBody\natGatewayPerformanceValues;

class CalculateNatGatewayCapacityUnitsResponseBody extends Model
{
    /**
     * @var natGatewayCapacity
     */
    public $natGatewayCapacity;

    /**
     * @var natGatewayPerformanceValues
     */
    public $natGatewayPerformanceValues;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'natGatewayCapacity' => 'NatGatewayCapacity',
        'natGatewayPerformanceValues' => 'NatGatewayPerformanceValues',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
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
        if (null !== $this->natGatewayCapacity) {
            $res['NatGatewayCapacity'] = null !== $this->natGatewayCapacity ? $this->natGatewayCapacity->toArray($noStream) : $this->natGatewayCapacity;
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
        if (isset($map['NatGatewayCapacity'])) {
            $model->natGatewayCapacity = natGatewayCapacity::fromMap($map['NatGatewayCapacity']);
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
