<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class DescribeTopBigKeysRequest extends Model
{
    /**
     * @description The reserved parameter.
     *
     * @example None
     *
     * @var string
     */
    public $consoleContext;

    /**
     * @description The end of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >
     *
     *   The end time must be later than the start time.
     *
     *   Only data within the last four days can be queried.
     *
     *   The maximum interval between the **start time** and the** end time** is 3 hours.
     *
     * @example 1596177993001
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the ApsaraDB for Redis instance. You can call the [DescribeInstances](~~60933~~) operation to query the ID.
     *
     * @example r-bp18ff4a195d****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the data shard on the ApsaraDB for Redis instance. You can call the [DescribeRoleZoneInfo](~~190794~~) operation to query the ID.
     *
     * @example r-x****-db-0
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The beginning of the time range to query. Set this parameter to a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1596177993000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'endTime'        => 'EndTime',
        'instanceId'     => 'InstanceId',
        'nodeId'         => 'NodeId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTopBigKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
