<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesRequest;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @description The number of pay-as-you-go instances of the same instance type that reserved instance N can match. The value of this parameter must be greater than or equal to 1. Valid values of N: 1 to 100.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description The instance type that reserved instance N can match. Valid values of N: 1 to 100.
     *
     * >  The applicable instance types are continuously updated. For more information, see the "Attributes" section in [Overview of reserved instances](https://help.aliyun.com/document_detail/100370.html).
     * @example ecs.c5.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of reserved instance N. Valid values of N: 1 to 100.
     *
     * The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with http:// or https://. The name can contain digits, letters, colons (:), underscores (_), and hyphens (-).
     * @example testReservedInstanceName
     *
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @description The scope of reserved instance N. Valid values:
     *
     *   Region: regional
     *   Zone: zonal
     *
     * Default value: Region.
     * @example Zone
     *
     * @var string
     */
    public $scope;

    /**
     * @description The zone ID of reserved instance N. Valid values of N: 1 to 100.
     *
     * You can call the [DescribeZones](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent zone list.
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceAmount'       => 'InstanceAmount',
        'instanceType'         => 'InstanceType',
        'reservedInstanceName' => 'ReservedInstanceName',
        'scope'                => 'Scope',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->reservedInstanceName) {
            $res['ReservedInstanceName'] = $this->reservedInstanceName;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
