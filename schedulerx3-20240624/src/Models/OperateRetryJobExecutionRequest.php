<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class OperateRetryJobExecutionRequest extends Model
{
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
     * @var string[]
     */
    public $taskList;

    /**
     * @var bool
     */
    public $triggerChild;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'jobExecutionId' => 'JobExecutionId',
        'taskList' => 'TaskList',
        'triggerChild' => 'TriggerChild',
    ];

    public function validate()
    {
        if (\is_array($this->taskList)) {
            Model::validateArray($this->taskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }

        if (null !== $this->taskList) {
            if (\is_array($this->taskList)) {
                $res['TaskList'] = [];
                $n1 = 0;
                foreach ($this->taskList as $item1) {
                    $res['TaskList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['TaskList'])) {
                $model->taskList = [];
                $n1 = 0;
                foreach ($map['TaskList'] as $item1) {
                    $model->taskList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TriggerChild'])) {
            $model->triggerChild = $map['TriggerChild'];
        }

        return $model;
    }
}
