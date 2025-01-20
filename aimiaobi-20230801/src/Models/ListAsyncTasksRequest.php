<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListAsyncTasksRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var string
     */
    public $createTimeEnd;
    /**
     * @var string
     */
    public $createTimeStart;
    /**
     * @var int
     */
    public $current;
    /**
     * @var int
     */
    public $size;
    /**
     * @var string
     */
    public $taskCode;
    /**
     * @var string
     */
    public $taskName;
    /**
     * @var int
     */
    public $taskStatus;
    /**
     * @var int[]
     */
    public $taskStatusList;
    /**
     * @var string
     */
    public $taskType;
    /**
     * @var string[]
     */
    public $taskTypeList;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'createTimeEnd'   => 'CreateTimeEnd',
        'createTimeStart' => 'CreateTimeStart',
        'current'         => 'Current',
        'size'            => 'Size',
        'taskCode'        => 'TaskCode',
        'taskName'        => 'TaskName',
        'taskStatus'      => 'TaskStatus',
        'taskStatusList'  => 'TaskStatusList',
        'taskType'        => 'TaskType',
        'taskTypeList'    => 'TaskTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->taskStatusList)) {
            Model::validateArray($this->taskStatusList);
        }
        if (\is_array($this->taskTypeList)) {
            Model::validateArray($this->taskTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->createTimeEnd) {
            $res['CreateTimeEnd'] = $this->createTimeEnd;
        }

        if (null !== $this->createTimeStart) {
            $res['CreateTimeStart'] = $this->createTimeStart;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->taskCode) {
            $res['TaskCode'] = $this->taskCode;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskStatusList) {
            if (\is_array($this->taskStatusList)) {
                $res['TaskStatusList'] = [];
                $n1                    = 0;
                foreach ($this->taskStatusList as $item1) {
                    $res['TaskStatusList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        if (null !== $this->taskTypeList) {
            if (\is_array($this->taskTypeList)) {
                $res['TaskTypeList'] = [];
                $n1                  = 0;
                foreach ($this->taskTypeList as $item1) {
                    $res['TaskTypeList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['CreateTimeEnd'])) {
            $model->createTimeEnd = $map['CreateTimeEnd'];
        }

        if (isset($map['CreateTimeStart'])) {
            $model->createTimeStart = $map['CreateTimeStart'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['TaskCode'])) {
            $model->taskCode = $map['TaskCode'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskStatusList'])) {
            if (!empty($map['TaskStatusList'])) {
                $model->taskStatusList = [];
                $n1                    = 0;
                foreach ($map['TaskStatusList'] as $item1) {
                    $model->taskStatusList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        if (isset($map['TaskTypeList'])) {
            if (!empty($map['TaskTypeList'])) {
                $model->taskTypeList = [];
                $n1                  = 0;
                foreach ($map['TaskTypeList'] as $item1) {
                    $model->taskTypeList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
