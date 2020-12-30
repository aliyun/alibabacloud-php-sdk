<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models\ListSchedulesResponseBody;

use AlibabaCloud\Tea\Model;

class schedules extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $scheduleId;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $scheduleName;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'description'      => 'Description',
        'scheduleId'       => 'ScheduleId',
        'payload'          => 'Payload',
        'scheduleName'     => 'ScheduleName',
        'createdTime'      => 'CreatedTime',
        'lastModifiedTime' => 'LastModifiedTime',
        'cronExpression'   => 'CronExpression',
        'enable'           => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->scheduleId) {
            $res['ScheduleId'] = $this->scheduleId;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->scheduleName) {
            $res['ScheduleName'] = $this->scheduleName;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ScheduleId'])) {
            $model->scheduleId = $map['ScheduleId'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['ScheduleName'])) {
            $model->scheduleName = $map['ScheduleName'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
