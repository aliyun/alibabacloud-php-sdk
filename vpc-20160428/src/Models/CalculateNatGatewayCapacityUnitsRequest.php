<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CalculateNatGatewayCapacityUnitsRequest\natGatewayCapacity;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CalculateNatGatewayCapacityUnitsRequest\natGatewayPerformanceValues;

class CalculateNatGatewayCapacityUnitsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dryRun;

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
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'natGatewayCapacity' => 'NatGatewayCapacity',
        'natGatewayId' => 'NatGatewayId',
        'natGatewayPerformanceValues' => 'NatGatewayPerformanceValues',
        'regionId' => 'RegionId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
