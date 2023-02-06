<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusRequest\eventTime;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDisksFullStatusRequest extends Model
{
    /**
     * @var eventTime
     */
    public $eventTime;

    /**
     * @description The ID of EBS device N. Valid values of N: 1 to 100.
     *
     * @example d-bp67acfmxazb4p****
     *
     * @var string[]
     */
    public $diskId;

    /**
     * @description The ID of the event. Valid values of N: 1 to 100.
     *
     * @example e-bp67acfmxazb4p****
     *
     * @var string[]
     */
    public $eventId;

    /**
     * @description The event type. Valid values:
     *
     *   Degraded: The performance of the EBS device is degraded.
     *   SeverelyDegraded: The performance of the EBS device is severely degraded.
     *   Stalled: The performance of the EBS device is severely affected.
     *   ErrorDetected: The local disk is damaged.
     *
     * @example Stalled
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The health status of the EBS device. Valid values:
     *
     *   Impaired: The EBS device is damaged.
     *   Warning: The performance of the EBS device may be degraded.
     *   Initializing: The disk is being initialized.
     *   InsufficientData: The status cannot be determined due to insufficient data.
     *   NotApplicable: The EBS device cannot be used.
     *
     * @example Warning
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value must be a positive integer.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 100.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the EBS device. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the EBS device belongs. When you use this property to query resources, the number of resources that are contained in the specified resource group cannot exceed 1,000.
     *
     * @example rg-aek2kkmhmhs****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The lifecycle status of the EBS device. For more information, see [Disk status](~~25689~~). Valid values:
     *
     *   In_use: The disk is in use.
     *   Available: The disk can be attached.
     *   Attaching: The disk is being attached.
     *   Detaching: The disk is being detached.
     *   Creating: The disk is being created.
     *   ReIniting: The disk is being initialized.
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags of the instance.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'eventTime'            => 'EventTime',
        'diskId'               => 'DiskId',
        'eventId'              => 'EventId',
        'eventType'            => 'EventType',
        'healthStatus'         => 'HealthStatus',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'status'               => 'Status',
        'tag'                  => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTime) {
            $res['EventTime'] = null !== $this->eventTime ? $this->eventTime->toMap() : null;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDisksFullStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventTime'])) {
            $model->eventTime = eventTime::fromMap($map['EventTime']);
        }
        if (isset($map['DiskId'])) {
            if (!empty($map['DiskId'])) {
                $model->diskId = $map['DiskId'];
            }
        }
        if (isset($map['EventId'])) {
            if (!empty($map['EventId'])) {
                $model->eventId = $map['EventId'];
            }
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

        return $model;
    }
}
