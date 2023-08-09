<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponseBody\reservedInstances;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponseBody\reservedInstances\reservedInstance\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesResponseBody\reservedInstances\reservedInstance\tags;
use AlibabaCloud\Tea\Model;

class reservedInstance extends Model
{
    /**
     * @description Indicates the sharing status of the reserved instance when the AllocationType parameter is set to Shared. Valid values:
     *
     *   allocated: The reserved instance is allocated to another account.
     *   beAllocated: The reserved instance is allocated by another account.
     *
     * @example allocated
     *
     * @var string
     */
    public $allocationStatus;

    /**
     * @description The creation time.
     *
     * @example 2018-12-10T12:07Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The expiration time.
     *
     * @example 2019-12-10T12:07Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The number of pay-as-you-go instances that are of the same instance type as the reserved instance and can be matched to the reserved instance.
     *
     * @example 10
     *
     * @var int
     */
    public $instanceAmount;

    /**
     * @description The instance type of the pay-as-you-go instances that can be matched to the reserved instance.
     *
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The payment option.
     *
     * @example All Upfront
     *
     * @var string
     */
    public $offeringType;

    /**
     * @description Details about the lock status of the reserved instance.
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description The operating system of the image used by the instance. Valid values:
     *
     *   Windows
     *   Linux
     *
     * @example Linux
     *
     * @var string
     */
    public $platform;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The reserved instance ID.
     *
     * @example ri-bpzhex2ulpzf53****
     *
     * @var string
     */
    public $reservedInstanceId;

    /**
     * @description The name.
     *
     * @example riZbpzhex2ulpzf53****
     *
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @description The resource group ID.
     *
     * @example EcsDocTest
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The scope.
     *
     * @example region
     *
     * @var string
     */
    public $scope;

    /**
     * @description The effective time.
     *
     * @example 2018-12-10T12:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description Details about the tags of the reserved instance.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-z
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocationStatus'     => 'AllocationStatus',
        'creationTime'         => 'CreationTime',
        'description'          => 'Description',
        'expiredTime'          => 'ExpiredTime',
        'instanceAmount'       => 'InstanceAmount',
        'instanceType'         => 'InstanceType',
        'offeringType'         => 'OfferingType',
        'operationLocks'       => 'OperationLocks',
        'platform'             => 'Platform',
        'regionId'             => 'RegionId',
        'reservedInstanceId'   => 'ReservedInstanceId',
        'reservedInstanceName' => 'ReservedInstanceName',
        'resourceGroupId'      => 'ResourceGroupId',
        'scope'                => 'Scope',
        'startTime'            => 'StartTime',
        'status'               => 'Status',
        'tags'                 => 'Tags',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationStatus) {
            $res['AllocationStatus'] = $this->allocationStatus;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->instanceAmount) {
            $res['InstanceAmount'] = $this->instanceAmount;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->reservedInstanceId) {
            $res['ReservedInstanceId'] = $this->reservedInstanceId;
        }
        if (null !== $this->reservedInstanceName) {
            $res['ReservedInstanceName'] = $this->reservedInstanceName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reservedInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InstanceAmount'])) {
            $model->instanceAmount = $map['InstanceAmount'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedInstanceId'])) {
            $model->reservedInstanceId = $map['ReservedInstanceId'];
        }
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
