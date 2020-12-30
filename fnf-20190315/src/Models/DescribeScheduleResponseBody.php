<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Fnf\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeScheduleResponseBody extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $payload;

    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $scheduleId;

    /**
     * @var string
     */
    public $scheduleName;
    protected $_name = [
        'description'      => 'Description',
        'createdTime'      => 'CreatedTime',
        'requestId'        => 'RequestId',
        'lastModifiedTime' => 'LastModifiedTime',
        'enable'           => 'Enable',
        'payload'          => 'Payload',
        'cronExpression'   => 'CronExpression',
        'scheduleId'       => 'ScheduleId',
        'scheduleName'     => 'ScheduleName',
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
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->payload) {
            $res['Payload'] = $this->payload;
        }
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
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
     * @return DescribeScheduleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Payload'])) {
            $model->payload = $map['Payload'];
        }
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
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
