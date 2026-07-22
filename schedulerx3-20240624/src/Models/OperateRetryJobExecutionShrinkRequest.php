<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class OperateRetryJobExecutionShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $appGroupId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $jobExecutionId;

    /**
     * @var string
     */
    public $taskListShrink;

    /**
     * @var bool
     */
    public $triggerChild;
    protected $_name = [
        'appGroupId' => 'AppGroupId',
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'jobExecutionId' => 'JobExecutionId',
        'taskListShrink' => 'TaskList',
        'triggerChild' => 'TriggerChild',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }

        if (null !== $this->taskListShrink) {
            $res['TaskList'] = $this->taskListShrink;
        }

        if (null !== $this->triggerChild) {
            $res['TriggerChild'] = $this->triggerChild;
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
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }

        if (isset($map['TaskList'])) {
            $model->taskListShrink = $map['TaskList'];
        }

        if (isset($map['TriggerChild'])) {
            $model->triggerChild = $map['TriggerChild'];
        }

        return $model;
    }
}
