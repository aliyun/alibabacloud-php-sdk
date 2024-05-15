<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class GetAutonomousNotifyEventsInRangeRequest extends Model
{
    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1568265711221
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $eventContext;

    /**
     * @description The instance ID.
     *
     * @example rm-18ff4a195d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The urgency level of the events. If you specify this parameter, the MinLevel parameter does not take effect. Valid values:
     *
     *   **Notice**: events for which the system sends notifications.
     *   **Optimization**: events that need to be optimized.
     *   **Warn**: events for which the system sends warnings.
     *   **Critical**: critical events.
     *
     * @example Warn
     *
     * @var string
     */
    public $level;

    /**
     * @description The minimum urgency level of the events. Valid values:
     *
     *   **Notice**: events for which the system sends notifications.
     *   **Optimization**: events that need to be optimized.
     *   **Warn**: events for which the system sends warnings.
     *   **Critical**: critical events.
     *
     * @example Notice
     *
     * @var string
     */
    public $minLevel;

    /**
     * @description The ID of the node in a PolarDB for MySQL cluster. You can call the [DescribeDBClusters](https://help.aliyun.com/document_detail/98094.html) operation to query the node ID returned by the DBNodeId response parameter.
     *
     * >  You must specify the node ID if your database instance is a PolarDB for MySQL cluster.
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The page number. The value must be a positive integer. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageOffset;

    /**
     * @description The number of entries per page.
     *
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     * @example 1568269711000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $context;
    protected $_name = [
        'endTime'      => 'EndTime',
        'eventContext' => 'EventContext',
        'instanceId'   => 'InstanceId',
        'level'        => 'Level',
        'minLevel'     => 'MinLevel',
        'nodeId'       => 'NodeId',
        'pageOffset'   => 'PageOffset',
        'pageSize'     => 'PageSize',
        'startTime'    => 'StartTime',
        'context'      => '__context',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventContext) {
            $res['EventContext'] = $this->eventContext;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->minLevel) {
            $res['MinLevel'] = $this->minLevel;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->pageOffset) {
            $res['PageOffset'] = $this->pageOffset;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->context) {
            $res['__context'] = $this->context;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAutonomousNotifyEventsInRangeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventContext'])) {
            $model->eventContext = $map['EventContext'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MinLevel'])) {
            $model->minLevel = $map['MinLevel'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PageOffset'])) {
            $model->pageOffset = $map['PageOffset'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['__context'])) {
            $model->context = $map['__context'];
        }

        return $model;
    }
}
