<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusRequest\eventTime;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusRequest\tag;

class DescribeDisksFullStatusRequest extends Model
{
    /**
     * @var eventTime
     */
    public $eventTime;
    /**
     * @var string[]
     */
    public $diskId;
    /**
     * @var string[]
     */
    public $eventId;
    /**
     * @var string
     */
    public $eventType;
    /**
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
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $regionId;
    /**
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
     * @var string
     */
    public $status;
    /**
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
        if (null !== $this->eventTime) {
            $this->eventTime->validate();
        }
        if (\is_array($this->diskId)) {
            Model::validateArray($this->diskId);
        }
        if (\is_array($this->eventId)) {
            Model::validateArray($this->eventId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventTime) {
            $res['EventTime'] = null !== $this->eventTime ? $this->eventTime->toArray($noStream) : $this->eventTime;
        }

        if (null !== $this->diskId) {
            if (\is_array($this->diskId)) {
                $res['DiskId'] = [];
                $n1            = 0;
                foreach ($this->diskId as $item1) {
                    $res['DiskId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->eventId) {
            if (\is_array($this->eventId)) {
                $res['EventId'] = [];
                $n1             = 0;
                foreach ($this->eventId as $item1) {
                    $res['EventId'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1         = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['EventTime'])) {
            $model->eventTime = eventTime::fromMap($map['EventTime']);
        }

        if (isset($map['DiskId'])) {
            if (!empty($map['DiskId'])) {
                $model->diskId = [];
                $n1            = 0;
                foreach ($map['DiskId'] as $item1) {
                    $model->diskId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EventId'])) {
            if (!empty($map['EventId'])) {
                $model->eventId = [];
                $n1             = 0;
                foreach ($map['EventId'] as $item1) {
                    $model->eventId[$n1++] = $item1;
                }
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
                $n1         = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
