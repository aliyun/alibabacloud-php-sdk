<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeReservedInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeReservedInstancesRequest extends Model
{
    /**
     * @description The allocation type of the reserved instances. Valid values:
     *
     *   Normal: queries all reserved instances that belong to the current account.
     *   Shared: queries the reserved instances that are shared between the current main account and linked accounts.
     *
     * Default value: Normal.
     * @example Normal
     *
     * @var string
     */
    public $allocationType;

    /**
     * @description The instance type of the reserved instance. For information about the valid values, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * >  Specify the instance type that you selected when you purchased the reserved instance. If the reserved instance is a regional reserved instance, it can be used to offset the bills of instance types that belong to the same instance family as the specified instance type, regardless of instance specifications.
     * @example ecs.g5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The instance family of the reserved instance. For information about the valid values, see [Overview of instance families](https://help.aliyun.com/document_detail/25378.html).
     *
     * @example ecs.g5
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @description The reason why the reserved instance is locked. Valid values:
     *
     *   financial: The reserved instance is locked because the account has overdue payments or the service expires.
     *   security: The reserved instance is locked due to security reasons.
     *
     * @example security
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description The payment option of the reserved instance. Valid values:
     *
     *   No Upfront
     *   Partial Upfront
     *   All Upfront
     *
     * @example All Upfront
     *
     * @var string
     */
    public $offeringType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Pages start from page 1.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * Default value: 10.
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the reserved instance. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of reserved instances. You can specify up to 100 IDs of reserved instances.
     *
     * @example ri-bpzhex2ulpzf53****
     *
     * @var string[]
     */
    public $reservedInstanceId;

    /**
     * @description The name of the reserved instance.
     *
     * >  Only exact search is supported.
     * @example testReservedInstanceName
     *
     * @var string
     */
    public $reservedInstanceName;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The scope level of the reserved instance. Valid values:
     *
     *   Region: regional
     *   Zone: zonal
     *
     * @example Region
     *
     * @var string
     */
    public $scope;

    /**
     * @description The status of the reserved instances.
     *
     * @example Active
     *
     * @var string[]
     */
    public $status;

    /**
     * @description The tags of the reserved instance. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The zone ID of the reserved instance. This parameter is valid and required if you set Scope to Zone. You can call the [DescribeZones](https://help.aliyun.com/document_detail/25610.html) operation to query the most recent zone list.
     *
     * @example cn-hangzhou-z
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocationType'       => 'AllocationType',
        'instanceType'         => 'InstanceType',
        'instanceTypeFamily'   => 'InstanceTypeFamily',
        'lockReason'           => 'LockReason',
        'offeringType'         => 'OfferingType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'reservedInstanceId'   => 'ReservedInstanceId',
        'reservedInstanceName' => 'ReservedInstanceName',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'scope'                => 'Scope',
        'status'               => 'Status',
        'tag'                  => 'Tag',
        'zoneId'               => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationType) {
            $res['AllocationType'] = $this->allocationType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->offeringType) {
            $res['OfferingType'] = $this->offeringType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReservedInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationType'])) {
            $model->allocationType = $map['AllocationType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['OfferingType'])) {
            $model->offeringType = $map['OfferingType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReservedInstanceId'])) {
            if (!empty($map['ReservedInstanceId'])) {
                $model->reservedInstanceId = $map['ReservedInstanceId'];
            }
        }
        if (isset($map['ReservedInstanceName'])) {
            $model->reservedInstanceName = $map['ReservedInstanceName'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = $map['Status'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
