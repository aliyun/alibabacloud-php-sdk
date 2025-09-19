<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulCheckTaskStatusDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulCheckTaskStatusDetailResponseBody\taskStatuses\taskStatusList;

class taskStatuses extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var taskStatusList[]
     */
    public $taskStatusList;
    protected $_name = [
        'taskId' => 'TaskId',
        'taskStatusList' => 'TaskStatusList',
    ];

    public function validate()
    {
        if (\is_array($this->taskStatusList)) {
            Model::validateArray($this->taskStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskStatusList) {
            if (\is_array($this->taskStatusList)) {
                $res['TaskStatusList'] = [];
                $n1 = 0;
                foreach ($this->taskStatusList as $item1) {
                    $res['TaskStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskStatusList'])) {
            if (!empty($map['TaskStatusList'])) {
                $model->taskStatusList = [];
                $n1 = 0;
                foreach ($map['TaskStatusList'] as $item1) {
                    $model->taskStatusList[$n1] = taskStatusList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
