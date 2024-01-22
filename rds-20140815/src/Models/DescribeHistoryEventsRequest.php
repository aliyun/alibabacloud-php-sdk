<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHistoryEventsRequest extends Model
{
    /**
     * @description The resource status. Valid values: **importing**, failed, checksuccess, and deleted.
     *
     * @example deleted
     *
     * @var string
     */
    public $archiveStatus;

    /**
     * @description The system event category. For more information, see [View the event history of an ApsaraDB RDS instance](~~129759~~).
     *
     * @example Exception
     *
     * @var string
     */
    public $eventCategory;

    /**
     * @description The event ID.
     *
     * @example 5345398
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The event level. Valid values: ***high***, **medium**, and **low**.
     *
     * @example high
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description The status of the exception. Valid values:
     *
     *   1: pending
     *   2: ignored
     *   4: confirmed
     *   8: marked as false positive
     *   16: handling
     *   32: handled
     *   64: expired
     *
     * @example 1
     *
     * @var string
     */
    public $eventStatus;

    /**
     * @description The system event type. This parameter takes effect only when InstanceEventType.N is not specified. Valid values: SystemMaintenance.Reboot: The instance is restarted due to system maintenance. SystemMaintenance.Redeploy: The instance is redeployed due to system maintenance. SystemFailure.Reboot: The instance is restarted due to a system error. SystemFailure.Redeploy: The instance is redeployed due to a system error. SystemFailure.Delete: The instance is released due to an instance creation failure. InstanceFailure.Reboot: The instance is restarted due to an instance error. InstanceExpiration.Stop: The subscription instance is stopped due to expiration. InstanceExpiration.Delete: The subscription instance is released due to expiration. AccountUnbalanced.Stop: The pay-as-you-go instance is stopped due to an overdue payment. AccountUnbalanced.Delete: The pay-as-you-go instance is released due to an overdue payment. For more information, see Overview. The values of this parameter are applicable only to instance system events, but not to disk system events.
     *
     * @example SystemFailure.Reboot
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The beginning of the time range to query. Only tasks that have a start time later than or equal to the time specified by this parameter are queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. The start time can be up to 30 days earlier than the current time. If you set this parameter to a time more than 30 days earlier than the current time, this time is automatically converted to a time that is exactly 30 days earlier than the current time.
     *
     * @example 2022-01-02T11:31:03Z
     *
     * @var string
     */
    public $fromStartTime;

    /**
     * @description The instance ID.
     *
     * @example rm-uf62br2491p5l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. Valid values: any non-zero positive integer. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 30.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~610399~~) operation to query the most recent region list.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The resource type. Set the value to **INSTANCE**.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The task ID. This value is used to query the data of a specific task.
     *
     * @example 241535739
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The end of the time range to query. Only tasks that have a start time earlier than or equal to the time specified by this parameter are queried. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2023-01-12T07:06:19Z
     *
     * @var string
     */
    public $toStartTime;
    protected $_name = [
        'archiveStatus'   => 'ArchiveStatus',
        'eventCategory'   => 'EventCategory',
        'eventId'         => 'EventId',
        'eventLevel'      => 'EventLevel',
        'eventStatus'     => 'EventStatus',
        'eventType'       => 'EventType',
        'fromStartTime'   => 'FromStartTime',
        'instanceId'      => 'InstanceId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceType'    => 'ResourceType',
        'securityToken'   => 'SecurityToken',
        'taskId'          => 'TaskId',
        'toStartTime'     => 'ToStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archiveStatus) {
            $res['ArchiveStatus'] = $this->archiveStatus;
        }
        if (null !== $this->eventCategory) {
            $res['EventCategory'] = $this->eventCategory;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventStatus) {
            $res['EventStatus'] = $this->eventStatus;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->fromStartTime) {
            $res['FromStartTime'] = $this->fromStartTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->toStartTime) {
            $res['ToStartTime'] = $this->toStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHistoryEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchiveStatus'])) {
            $model->archiveStatus = $map['ArchiveStatus'];
        }
        if (isset($map['EventCategory'])) {
            $model->eventCategory = $map['EventCategory'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventStatus'])) {
            $model->eventStatus = $map['EventStatus'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['FromStartTime'])) {
            $model->fromStartTime = $map['FromStartTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ToStartTime'])) {
            $model->toStartTime = $map['ToStartTime'];
        }

        return $model;
    }
}
