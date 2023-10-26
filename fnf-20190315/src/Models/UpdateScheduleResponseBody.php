<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class UpdateScheduleResponseBody extends Model
{
    /**
     * @description The time when the time-based schedule was created.
     *
     * @example 2020-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description The CRON expression.
     *
     * @example 0 * * * * *
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @description The description of the time-based schedule.
     *
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the time-based schedule is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The time when the time-based schedule was last updated.
     *
     * @example 2020-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description The trigger message of the time-based schedule.
     *
     * @example {"key": "value"}
     *
     * @var string
     */
    public $payload;

    /**
     * @description The request ID.
     *
     * @example testRequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the time-based schedule.
     *
     * @example testScheduleId
     *
     * @var string
     */
    public $scheduleId;

    /**
     * @description The name of the time-based schedule.
     *
     * @example testScheduleName
     *
     * @var string
     */
    public $scheduleName;
    protected $_name = [
        'createdTime'      => 'CreatedTime',
        'cronExpression'   => 'CronExpression',
        'description'      => 'Description',
        'enable'           => 'Enable',
        'lastModifiedTime' => 'LastModifiedTime',
        'payload'          => 'Payload',
        'requestId'        => 'RequestId',
        'scheduleId'       => 'ScheduleId',
        'scheduleName'     => 'ScheduleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->scheduleName) {
            $res['ScheduleName'] = $this->scheduleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateScheduleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }

        return $model;
    }
}
