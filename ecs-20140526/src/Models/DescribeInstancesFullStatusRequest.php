<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusRequest\eventPublishTime;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusRequest\notBefore;
use AlibabaCloud\Tea\Model;

class DescribeInstancesFullStatusRequest extends Model
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
     * @description The IDs of the event. You can specify up to 100 event IDs in a single request.
     *
     * @example e-bp1hygp5b04o56l0****
     *
     * @var string[]
     */
    public $eventId;

    /**
     * @description The type of the system event. This parameter is valid only when the InstanceEventType.N parameter is not specified. Valid values:
     *
     *   SystemMaintenance.Reboot: The instance is restarted due to system maintenance.
     *   SystemFailure.Reboot: The instance is restarted due to a system failure.
     *   InstanceFailure.Reboot: The instance is restarted due to an instance failure.
     *   InstanceExpiration.Stop: The subscription instance is stopped due to expiration.
     *   InstanceExpiration.Delete: The subscription instance is released due to expiration.
     *   AccountUnbalanced.Stop: The pay-as-you-go instance is stopped due to an overdue payment.
     *   AccountUnbalanced.Delete: The pay-as-you-go instance is released due to an overdue payment.
     *
     * @example InstanceExpiration.Stop
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The health state of the instance. Valid values:
     *
     *   Impaired: The instance is impaired.
     *   Warning: The performance of the instance is degraded.
     *   Maintaining: The instance is being maintained.
     *   Initializing: The instance is being initialized.
     *   InsufficientData: The state cannot be determined due to insufficient data.
     *   NotApplicable: The state is not applicable.
     *
     * All these values are case-sensitive.
     * @example Maintaining
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The types of system events. You can specify up to 30 event types in a single request.
     *
     * @example InstanceExpiration.Stop
     *
     * @var string[]
     */
    public $instanceEventType;

    /**
     * @description The IDs of the instances. You can specify up to 100 instance IDs in a single request.
     *
     * @example i-bp67acfmxazb4p****
     *
     * @var string[]
     */
    public $instanceId;

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
     * @description The region ID of the instance. You can call the [DescribeRegions](~~25609~~) operation to query the most recent list of regions.
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
     * @description The lifecycle state of the instance. Valid values:
     *
     *   Starting
     *   Running
     *   Stopped
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'eventPublishTime'     => 'EventPublishTime',
        'notBefore'            => 'NotBefore',
        'eventId'              => 'EventId',
        'eventType'            => 'EventType',
        'healthStatus'         => 'HealthStatus',
        'instanceEventType'    => 'InstanceEventType',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'status'               => 'Status',
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
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->instanceEventType) {
            $res['InstanceEventType'] = $this->instanceEventType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesFullStatusRequest
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
        if (isset($map['InstanceEventType'])) {
            if (!empty($map['InstanceEventType'])) {
                $model->instanceEventType = $map['InstanceEventType'];
            }
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
