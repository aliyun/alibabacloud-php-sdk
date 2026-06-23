<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetAutoOpsTaskResponseBody;

use AlibabaCloud\Dara\Model;

class task extends Model
{
    /**
     * @var int
     */
    public $allowedOverTime;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scheduleTimeInfo;

    /**
     * @var string
     */
    public $scheduleType;

    /**
     * @var string
     */
    public $script;

    /**
     * @var int
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $scriptType;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskState;
    protected $_name = [
        'allowedOverTime' => 'AllowedOverTime',
        'comment' => 'Comment',
        'name' => 'Name',
        'scheduleTimeInfo' => 'ScheduleTimeInfo',
        'scheduleType' => 'ScheduleType',
        'script' => 'Script',
        'scriptId' => 'ScriptId',
        'scriptName' => 'ScriptName',
        'scriptType' => 'ScriptType',
        'taskId' => 'TaskId',
        'taskState' => 'TaskState',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedOverTime) {
            $res['AllowedOverTime'] = $this->allowedOverTime;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->scheduleTimeInfo) {
            $res['ScheduleTimeInfo'] = $this->scheduleTimeInfo;
        }

        if (null !== $this->scheduleType) {
            $res['ScheduleType'] = $this->scheduleType;
        }

        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }

        if (null !== $this->scriptType) {
            $res['ScriptType'] = $this->scriptType;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
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
        if (isset($map['AllowedOverTime'])) {
            $model->allowedOverTime = $map['AllowedOverTime'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ScheduleTimeInfo'])) {
            $model->scheduleTimeInfo = $map['ScheduleTimeInfo'];
        }

        if (isset($map['ScheduleType'])) {
            $model->scheduleType = $map['ScheduleType'];
        }

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }

        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }

        if (isset($map['ScriptType'])) {
            $model->scriptType = $map['ScriptType'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }

        return $model;
    }
}
