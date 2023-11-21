<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Tea\Model;

class DescribeDedicatedHostsRequest extends Model
{
    /**
     * @description Specifies whether instances can be deployed on the host. Valid values:
     *
     *   **Allocatable**: Instances can be deployed on the host.
     *   **Suspended**: Instances cannot be deployed on the host.
     *
     * @example Allocatable
     *
     * @var string
     */
    public $allocationStatus;

    /**
     * @description The dedicated cluster ID. You can log on to the ApsaraDB for MyBase console and go to the **Dedicated Clusters** page to view the dedicated cluster ID.
     *
     * @example dhg-h5i4p331f509****
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description The ID of the host in the dedicated cluster. You can log on to the ApsaraDB for MyBase console and go to the **Hosts** page to view the host ID.
     *
     * @example ch-bp10a5id3boqi****
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description The state of the host. Valid values:
     *
     *   **0**: The host is being created.
     *   **1**: The host is running.
     *   **2**: The host is faulty.
     *   **3**: The host is ready for disabling.
     *   **4**: The host is being maintained.
     *   **5**: The host is disabled.
     *   **6**: The host is restarting.
     *   **7**: The host is locked.
     *
     * >  When a host fails, the host is disabled. Before the host is disabled, the data of the instances that run on the host is migrated to another host.
     * @example 1
     *
     * @var string
     */
    public $hostStatus;

    /**
     * @description The storage type of the host. Valid values:
     *
     *   **dhg_local_ssd**: local SSD.
     *   **dhg_cloud_ssd** or **dhg_cloud_essd**: enhanced SSD (ESSD).
     *
     * @example dhg_cloud_ssd
     *
     * @var string
     */
    public $hostType;

    /**
     * @description The order ID. You can log on to the Billing Management console and go to the **Orders** page to view the order ID.
     *
     * @example 123456789
     *
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number.
     *
     * @example 50
     *
     * @var int
     */
    public $pageNumbers;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description [The region ID](~~198326~~).
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
     * @description The tags that are added to the host. Each tag is a key-value pair that consists of TagKey and TagValue. You can specify a maximum of five tags in the following format for each request: {"key1":"value1","key2":"value2"...}.
     *
     * >  If you want to filter hosts based on tags, do not specify the **DedicatedHostId** parameter. Otherwise, the **DedicatedHostId** parameter is used to filter hosts.
     * @example {"key1":"value1"}
     *
     * @var string
     */
    public $tags;

    /**
     * @description The zone ID. You can call the [DescribeRegions](~~214103~~) operation to query the most recent zone list.
     *
     * @example ap-southeast-1a
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
        'pageNumbers'          => 'PageNumbers',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
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
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
