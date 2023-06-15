<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostsRequest extends Model
{
    /**
     * @description Specifies whether to query the hosts on which you can create instances or those on which you cannot create instances. Valid values:
     *
     *   **0**: queries the hosts on which you cannot create instances
     *   **1**: queries the hosts on which you can create instances
     *
     * @example 1
     *
     * @var string
     */
    public $allocationStatus;

    /**
     * @description The ID of the dedicated cluster. You can call the [DescribeDedicatedHostGroups](~~141946~~) operation to query the IDs of dedicated clusters.
     *
     * @example dhg-7a9xxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The ID of the host.
     *
     * @example ch-t4nn100ddxxxxxxxx
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The status of the hosts. Valid values:
     *
     *   **0**: queries the hosts that are being created
     *   **1**: queries the hosts that are running
     *   **2**: queries the hosts that are faulty
     *   **3**: queries the hosts that are being replaced
     *   **4**: queries the hosts that are deprecated
     *   **5**: queries the hosts that are being deleted
     *   **6**: queries the hosts that are restarting
     *
     * @example 1
     *
     * @var string
     */
    public $hostStatus;

    /**
     * @description The type of storage media that is used for the hosts. Valid values:
     *
     *   **dhg_cloud_ssd**: enhanced solid-state drive (SSD)
     *   **dhg_local_ssd**: local SSD
     *
     * @example dhg_cloud_ssd
     *
     * @var string
     */
    public $hostType;

    /**
     * @description The ID of the order.
     *
     * @example 102565235
     *
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the hosts. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The zone ID of the hosts.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocationStatus'     => 'AllocationStatus',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHostId'      => 'DedicatedHostId',
        'hostStatus'           => 'HostStatus',
        'hostType'             => 'HostType',
        'orderId'              => 'OrderId',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->hostStatus) {
            $res['HostStatus'] = $this->hostStatus;
        }
        if (null !== $this->hostType) {
            $res['HostType'] = $this->hostType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDedicatedHostsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationStatus'])) {
            $model->allocationStatus = $map['AllocationStatus'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['HostStatus'])) {
            $model->hostStatus = $map['HostStatus'];
        }
        if (isset($map['HostType'])) {
            $model->hostType = $map['HostType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
