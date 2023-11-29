<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetShipperStatusResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The ID of the log shipping job.
     *
     * @example abcdefghijk
     *
     * @var string
     */
    public $id;

    /**
     * @description The error code of the log shipping job.
     *
     * @example UnAuthorized
     *
     * @var string
     */
    public $taskCode;

    /**
     * @description The start time of the log shipping job. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1448925013
     *
     * @var int
     */
    public $taskCreateTime;

    /**
     * @description The number of logs that are shipped in the log shipping job.
     *
     * @example 0
     *
     * @var int
     */
    public $taskDataLines;

    /**
     * @description The end time of the log shipping job. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1448926013
     *
     * @var int
     */
    public $taskFinishTime;

    /**
     * @description The time when Simple Log Service receives the most recent log of the log shipping job. The value is a UNIX timestamp representing the number of seconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1448915013
     *
     * @var int
     */
    public $taskLastDataReceiveTime;

    /**
     * @description The error message of the log shipping job.
     *
     * @example Internal server error
     *
     * @var string
     */
    public $taskMessage;

    /**
     * @description The status of the log shipping job. Valid values: running, success, and fail.
     *
     * @example success
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'id'                      => 'id',
        'taskCode'                => 'taskCode',
        'taskCreateTime'          => 'taskCreateTime',
        'taskDataLines'           => 'taskDataLines',
        'taskFinishTime'          => 'taskFinishTime',
        'taskLastDataReceiveTime' => 'taskLastDataReceiveTime',
        'taskMessage'             => 'taskMessage',
        'taskStatus'              => 'taskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->taskCode) {
            $res['taskCode'] = $this->taskCode;
        }
        if (null !== $this->taskCreateTime) {
            $res['taskCreateTime'] = $this->taskCreateTime;
        }
        if (null !== $this->taskDataLines) {
            $res['taskDataLines'] = $this->taskDataLines;
        }
        if (null !== $this->taskFinishTime) {
            $res['taskFinishTime'] = $this->taskFinishTime;
        }
        if (null !== $this->taskLastDataReceiveTime) {
            $res['taskLastDataReceiveTime'] = $this->taskLastDataReceiveTime;
        }
        if (null !== $this->taskMessage) {
            $res['taskMessage'] = $this->taskMessage;
        }
        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['taskCode'])) {
            $model->taskCode = $map['taskCode'];
        }
        if (isset($map['taskCreateTime'])) {
            $model->taskCreateTime = $map['taskCreateTime'];
        }
        if (isset($map['taskDataLines'])) {
            $model->taskDataLines = $map['taskDataLines'];
        }
        if (isset($map['taskFinishTime'])) {
            $model->taskFinishTime = $map['taskFinishTime'];
        }
        if (isset($map['taskLastDataReceiveTime'])) {
            $model->taskLastDataReceiveTime = $map['taskLastDataReceiveTime'];
        }
        if (isset($map['taskMessage'])) {
            $model->taskMessage = $map['taskMessage'];
        }
        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        return $model;
    }
}
