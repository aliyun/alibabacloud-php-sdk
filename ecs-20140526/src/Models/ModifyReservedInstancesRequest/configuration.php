<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyReservedInstancesRequest;

use AlibabaCloud\Tea\Model;

class configuration extends Model
{
    /**
     * @description The number of pay-as-you-go instances of the specified instance type that the new reserved instance can match. The value of this parameter must be greater than or equal to 1.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description The instance types that the new reserved instance can match.
     *
     * >  The supported instance types are continuously updated. For information about the instance types supported by reserved instances, see [Overview of reserved instances](~~100370#3c1b682051vt4~~).
     *
     * @example ecs.c5.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of the new reserved instance.
     *
     * The name must be 2 to 128 characters in length. The name must start with a letter and cannot start with http:// or https://. The name can contain letters, digits, colons (:), underscores (_), and hyphens (-).
     *
     * @example testReservedInstanceName
     *
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @description The scope level of the new reserved instance. Valid values:
     *
     *   Region
     *   Zone
     *
     * Default value: Region.
     *
     * @example Zone
     *
     * @var string
     */
    public $scope;

    /**
     * @description The zone ID of the new reserved instance.
     *
     * This parameter is required when you set `Scope` to `Zone`.
     *
     * You can call the [DescribeZones](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceAmount' => 'InstanceAmount',
        'instanceType' => 'InstanceType',
        'reservedInstanceName' => 'ReservedInstanceName',
        'scope' => 'Scope',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

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
