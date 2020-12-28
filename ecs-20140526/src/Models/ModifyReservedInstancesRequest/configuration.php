<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesRequest;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $instanceAmount;
    protected $_name = [
        'reservedInstanceName' => 'ReservedInstanceName',
        'zoneId'               => 'ZoneId',
        'scope'                => 'Scope',
        'instanceType'         => 'InstanceType',
        'instanceAmount'       => 'InstanceAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reservedInstanceName) {
            $res['ReservedInstanceName'] = $this->reservedInstanceName;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configuration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }

        return $model;
    }
}
