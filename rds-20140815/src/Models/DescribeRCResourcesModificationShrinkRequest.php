<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeRCResourcesModificationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $conditionssShrink;

    /**
     * @var int
     */
    public $cores;

    /**
     * @var string
     */
    public $destinationResource;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var float
     */
    public $memory;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'conditionssShrink' => 'Conditionss',
        'cores' => 'Cores',
        'destinationResource' => 'DestinationResource',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'memory' => 'Memory',
        'operationType' => 'OperationType',
        'regionId' => 'RegionId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditionssShrink) {
            $res['Conditionss'] = $this->conditionssShrink;
        }

        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }

        if (null !== $this->destinationResource) {
            $res['DestinationResource'] = $this->destinationResource;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Conditionss'])) {
            $model->conditionssShrink = $map['Conditionss'];
        }

        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }

        if (isset($map['DestinationResource'])) {
            $model->destinationResource = $map['DestinationResource'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
