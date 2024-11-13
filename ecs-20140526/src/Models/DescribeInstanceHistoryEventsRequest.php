<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest\eventPublishTime;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest\notBefore;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceHistoryEventsRequest\tag;
use AlibabaCloud\Tea\Model;

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
     * @description The lifecycle state of the system event. This parameter takes effect only when InstanceEventCycleStatus.N is not specified. Valid values:
     *
     *   Scheduled
     *   Avoided
     *   Executing
     *   Executed
     *   Canceled
     *   Failed
     *   Inquiring
     *
     * @example Executed
     *
     * @var string
     */
    public $eventCycleStatus;

    /**
     * @description The ID of system event N. Valid values of N: 1 to 100. You can repeat this parameter to pass multiple values.
     *
     * @example e-uf64yvznlao4jl2c****
     *
     * @var string[]
     */
    public $eventId;

    /**
     * @description The type of the system event. This parameter takes effect only when InstanceEventType.N is not specified. Valid values:
     *
     *   SystemMaintenance.Reboot: The instance is restarted due to system maintenance.
     *   SystemMaintenance.Redeploy: The instance is redeployed due to system maintenance.
     *   SystemFailure.Reboot: The instance is restarted due to a system error.
     *   SystemFailure.Redeploy: The instance is redeployed due to a system error.
     *   SystemFailure.Delete: The instance is released due to an instance creation failure.
     *   InstanceFailure.Reboot: The instance is restarted due to an instance error.
     *   InstanceExpiration.Stop: The subscription instance is stopped due to expiration.
     *   InstanceExpiration.Delete: The subscription instance is released due to expiration.
     *   AccountUnbalanced.Stop: The pay-as-you-go instance is stopped due to an overdue payment.
     *   AccountUnbalanced.Delete: The pay-as-you-go instance is released due to an overdue payment.
     *
     * >  For more information, see [Overview](https://help.aliyun.com/document_detail/66574.html). The values of this parameter are applicable only to instance system events, but not to disk system events.
     * @example SystemMaintenance.Reboot
     *
     * @var string
     */
    public $eventType;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example null
     *
     * @var string
     */
    public $impactLevel;

    /**
     * @description The lifecycle state of system event N. Valid values of N: 1 to 7. You can repeat this parameter to pass multiple values. Valid values:
     *
     *   Scheduled
     *   Avoided
     *   Executing
     *   Executed
     *   Canceled
     *   Failed
     *   Inquiring
     *
     * @example Executed
     *
     * @var string[]
     */
    public $instanceEventCycleStatus;

    /**
     * @description The type of system event N. Valid values of N: 1 to 30. You can repeat this parameter to pass multiple values. Valid values:
     *
     *   SystemMaintenance.Reboot: The instance is restarted due to system maintenance.
     *   SystemMaintenance.Redeploy: The instance is redeployed due to system maintenance.
     *   SystemFailure.Reboot: The instance is restarted due to a system error.
     *   SystemFailure.Redeploy: The instance is redeployed due to a system error.
     *   SystemFailure.Delete: The instance is released due to an instance creation failure.
     *   InstanceFailure.Reboot: The instance is restarted due to an instance error.
     *   InstanceExpiration.Stop: The subscription instance is stopped due to expiration.
     *   InstanceExpiration.Delete: The subscription instance is released due to expiration.
     *   AccountUnbalanced.Stop: The pay-as-you-go instance is stopped due to an overdue payment.
     *   AccountUnbalanced.Delete: The pay-as-you-go instance is released due to an overdue payment.
     *
     * >  For more information, see [Overview](https://help.aliyun.com/document_detail/66574.html). The values of this parameter are applicable only to instance system events, but not to disk system events.
     * @example SystemMaintenance.Reboot
     *
     * @var string[]
     */
    public $instanceEventType;

    /**
     * @description The ID of the instance. If this parameter is not specified, the system events of all instances in the specified region are queried.
     *
     * @example i-uf678mass4zvr9n1****
     *
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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the resource. You can call [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the resource belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of resource N. Valid values of N: 1 to 100. You can repeat this parameter to pass multiple values. Valid values:
     *
     *   When `ResourceType` is set to instance, ResourceId.N specifies the ID of instance N.
     *   When `ResourceType` is set to ddh, ResourceId.N specifies the ID of dedicated host N.
     *   When `ResourceType` is set to managedhost, ResourceId.N specifies the ID of physical machine N from a smart hosting pool.
     *
     * >  We recommend that you use `ResourceId.N` to specify one or more resource IDs. If you specify both `ResourceId.N` and `InstanceId`, `ResourceId.N` takes precedence by default.
     * @example i-uf678mass4zvr9n1****
     *
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
     * @description The type of the resource. Valid values:
     *
     *   instance: ECS instance
     *   ddh: dedicated host
     *   managehost: physical machine in a smart hosting pool
     *
     * Default value: instance.
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The list of tags.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventPublishTime) {
            $res['EventPublishTime'] = null !== $this->eventPublishTime ? $this->eventPublishTime->toMap() : null;
        }
        if (null !== $this->notBefore) {
            $res['NotBefore'] = null !== $this->notBefore ? $this->notBefore->toMap() : null;
        }
        if (null !== $this->eventCycleStatus) {
            $res['EventCycleStatus'] = $this->eventCycleStatus;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->impactLevel) {
            $res['ImpactLevel'] = $this->impactLevel;
        }
        if (null !== $this->instanceEventCycleStatus) {
            $res['InstanceEventCycleStatus'] = $this->instanceEventCycleStatus;
        }
        if (null !== $this->instanceEventType) {
            $res['InstanceEventType'] = $this->instanceEventType;
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
            $res['ResourceId'] = $this->resourceId;
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
     * @return DescribeInstanceHistoryEventsRequest
     */
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
                $model->eventId = $map['EventId'];
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
                $model->instanceEventCycleStatus = $map['InstanceEventCycleStatus'];
            }
        }
        if (isset($map['InstanceEventType'])) {
            if (!empty($map['InstanceEventType'])) {
                $model->instanceEventType = $map['InstanceEventType'];
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
                $model->resourceId = $map['ResourceId'];
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
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
