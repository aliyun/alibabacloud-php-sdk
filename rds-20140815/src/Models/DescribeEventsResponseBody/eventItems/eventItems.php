<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeEventsResponseBody\eventItems;

use AlibabaCloud\Tea\Model;

class eventItems extends Model
{
    /**
     * @description The ID of the user who executed the event.
     *
     * @example 22973492**********
     *
     * @var int
     */
    public $callerUid;

    /**
     * @description The ID of the event.
     *
     * @example 11000053
     *
     * @var int
     */
    public $eventId;

    /**
     * @description The name of the event. For more information, see [View the event history of an ApsaraDB RDS instance](~~129759~~).
     *
     * @example ModifySecurityIPList
     *
     * @var string
     */
    public $eventName;

    /**
     * @description The request or context parameters of the event.
     *
     * @example {\"Domain\": \"rds-inc-share.aliyuncs.com\", \"Api\": \"ReleaseInstancePublicConnection\"}
     *
     * @var string
     */
    public $eventPayload;

    /**
     * @description The source of the event. For more information, see [View the event history of an ApsaraDB RDS instance](~~129759~~).
     *
     * @example FROM_USER
     *
     * @var string
     */
    public $eventReason;

    /**
     * @description The time when the event was recorded. The time is slightly later than the time the event occurred.
     *
     * @example 2019-08-20T01:12:49Z
     *
     * @var string
     */
    public $eventRecordTime;

    /**
     * @description The time when the event occurred.
     *
     * @example 2019-08-20T01:08:22Z
     *
     * @var string
     */
    public $eventTime;

    /**
     * @description The type of the event. For more information, see [View the event history of an ApsaraDB RDS instance](~~129759~~).
     *
     * @example NetworkManagement
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The type of the user who executed the event.
     *
     * @example SYSTEM
     *
     * @var string
     */
    public $eventUserType;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the resource associated with the event. Only instance IDs are supported for this parameter.
     *
     * @example rm-bp1z3065m9976ix8a
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The type of the resource associated with the event. Only instances are supported for this parameter.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'callerUid'       => 'CallerUid',
        'eventId'         => 'EventId',
        'eventName'       => 'EventName',
        'eventPayload'    => 'EventPayload',
        'eventReason'     => 'EventReason',
        'eventRecordTime' => 'EventRecordTime',
        'eventTime'       => 'EventTime',
        'eventType'       => 'EventType',
        'eventUserType'   => 'EventUserType',
        'regionId'        => 'RegionId',
        'resourceName'    => 'ResourceName',
        'resourceType'    => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }
        if (null !== $this->eventPayload) {
            $res['EventPayload'] = $this->eventPayload;
        }
        if (null !== $this->eventReason) {
            $res['EventReason'] = $this->eventReason;
        }
        if (null !== $this->eventRecordTime) {
            $res['EventRecordTime'] = $this->eventRecordTime;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->eventUserType) {
            $res['EventUserType'] = $this->eventUserType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }
        if (isset($map['EventPayload'])) {
            $model->eventPayload = $map['EventPayload'];
        }
        if (isset($map['EventReason'])) {
            $model->eventReason = $map['EventReason'];
        }
        if (isset($map['EventRecordTime'])) {
            $model->eventRecordTime = $map['EventRecordTime'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['EventUserType'])) {
            $model->eventUserType = $map['EventUserType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
