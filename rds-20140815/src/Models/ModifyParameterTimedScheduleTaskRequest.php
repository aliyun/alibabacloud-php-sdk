<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class ModifyParameterTimedScheduleTaskRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $switchTime;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'switchTime' => 'SwitchTime',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
