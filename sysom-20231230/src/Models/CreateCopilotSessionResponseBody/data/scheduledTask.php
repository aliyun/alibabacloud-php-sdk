<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\CreateCopilotSessionResponseBody\data;

use AlibabaCloud\Dara\Model;

class scheduledTask extends Model
{
    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $scheduledAt;

    /**
     * @var string
     */
    public $startedAt;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $timezone;
    protected $_name = [
        'runId' => 'runId',
        'scheduledAt' => 'scheduledAt',
        'startedAt' => 'startedAt',
        'taskId' => 'taskId',
        'taskName' => 'taskName',
        'timezone' => 'timezone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->scheduledAt) {
            $res['scheduledAt'] = $this->scheduledAt;
        }

        if (null !== $this->startedAt) {
            $res['startedAt'] = $this->startedAt;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
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
        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['scheduledAt'])) {
            $model->scheduledAt = $map['scheduledAt'];
        }

        if (isset($map['startedAt'])) {
            $model->startedAt = $map['startedAt'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        return $model;
    }
}
