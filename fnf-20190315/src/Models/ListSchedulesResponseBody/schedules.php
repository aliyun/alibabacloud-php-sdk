<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models\ListSchedulesResponseBody;

use AlibabaCloud\Tea\Model;

class schedules extends Model
{
    /**
     * @example 2020-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example 0 * * * * *
     *
     * @var string
     */
    public $cronExpression;

    /**
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example 2020-01-01T01:01:01.001Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @example {"key": "value"}
     *
     * @var string
     */
    public $payload;

    /**
     * @example testScheduleId
     *
     * @var string
     */
    public $scheduleId;

    /**
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
     * @return schedules
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
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }

        return $model;
    }
}
