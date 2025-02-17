<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest\eventPublishTime;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest\notBefore;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest\tag;

class DescribeInstanceHistoryEventsRequest extends Model
{
    /**
     * @var eventPublishTime
     */
    public $eventPublishTime;
    /**
     * @var notBefore
     */
    public $notBefore;
    /**
     * @var string
     */
    public $eventCycleStatus;
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
    public $impactLevel;
    /**
     * @var string[]
     */
    public $instanceEventCycleStatus;
    /**
     * @var string[]
     */
    public $instanceEventType;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
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
     * @var string[]
     */
    public $resourceId;
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
    public $resourceType;
    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'eventPublishTime'         => 'EventPublishTime',
        'notBefore'                => 'NotBefore',
        'eventCycleStatus'         => 'EventCycleStatus',
        'eventId'                  => 'EventId',
        'eventType'                => 'EventType',
        'impactLevel'              => 'ImpactLevel',
        'instanceEventCycleStatus' => 'InstanceEventCycleStatus',
        'instanceEventType'        => 'InstanceEventType',
        'instanceId'               => 'InstanceId',
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'resourceId'               => 'ResourceId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'resourceType'             => 'ResourceType',
        'tag'                      => 'Tag',
    ];

    public function validate()
    {
        if (null !== $this->eventPublishTime) {
            $this->eventPublishTime->validate();
        }
        if (null !== $this->notBefore) {
            $this->notBefore->validate();
        }
        if (\is_array($this->eventId)) {
            Model::validateArray($this->eventId);
        }
        if (\is_array($this->instanceEventCycleStatus)) {
            Model::validateArray($this->instanceEventCycleStatus);
        }
        if (\is_array($this->instanceEventType)) {
            Model::validateArray($this->instanceEventType);
        }
        if (\is_array($this->resourceId)) {
            Model::validateArray($this->resourceId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventPublishTime) {
            $res['EventPublishTime'] = null !== $this->eventPublishTime ? $this->eventPublishTime->toArray($noStream) : $this->eventPublishTime;
        }

        if (null !== $this->notBefore) {
            $res['NotBefore'] = null !== $this->notBefore ? $this->notBefore->toArray($noStream) : $this->notBefore;
        }

        if (null !== $this->eventCycleStatus) {
            $res['EventCycleStatus'] = $this->eventCycleStatus;
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

        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }

        if (null !== $this->instanceEventCycleStatus) {
            if (\is_array($this->instanceEventCycleStatus)) {
                $res['InstanceEventCycleStatus'] = [];
                $n1                              = 0;
                foreach ($this->instanceEventCycleStatus as $item1) {
                    $res['InstanceEventCycleStatus'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceEventType) {
            if (\is_array($this->instanceEventType)) {
                $res['InstanceEventType'] = [];
                $n1                       = 0;
                foreach ($this->instanceEventType as $item1) {
                    $res['InstanceEventType'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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

        if (null !== $this->resourceId) {
            if (\is_array($this->resourceId)) {
                $res['ResourceId'] = [];
                $n1                = 0;
                foreach ($this->resourceId as $item1) {
                    $res['ResourceId'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['EventPublishTime'])) {
            $model->eventPublishTime = eventPublishTime::fromMap($map['EventPublishTime']);
        }

        if (isset($map['NotBefore'])) {
            $model->notBefore = notBefore::fromMap($map['NotBefore']);
        }

        if (isset($map['EventCycleStatus'])) {
            $model->eventCycleStatus = $map['EventCycleStatus'];
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

        if (isset($map['ImpactLevel'])) {
            $model->impactLevel = $map['ImpactLevel'];
        }

        if (isset($map['InstanceEventCycleStatus'])) {
            if (!empty($map['InstanceEventCycleStatus'])) {
                $model->instanceEventCycleStatus = [];
                $n1                              = 0;
                foreach ($map['InstanceEventCycleStatus'] as $item1) {
                    $model->instanceEventCycleStatus[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceEventType'])) {
            if (!empty($map['InstanceEventType'])) {
                $model->instanceEventType = [];
                $n1                       = 0;
                foreach ($map['InstanceEventType'] as $item1) {
                    $model->instanceEventType[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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

        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = [];
                $n1                = 0;
                foreach ($map['ResourceId'] as $item1) {
                    $model->resourceId[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
