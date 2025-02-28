<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models\ListSchedulesResponseBody;

use AlibabaCloud\Dara\Model;

class schedules extends Model
{
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var string
     */
    public $cronExpression;
    /**
     * @var string
     */
    public $description;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var string
     */
    public $lastModifiedTime;
    /**
     * @var string
     */
    public $payload;
    /**
     * @var string
     */
    public $scheduleId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
