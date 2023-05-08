<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulCheckTaskStatusDetailResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulCheckTaskStatusDetailResponseBody\taskStatuses\taskStatusList;
use AlibabaCloud\Tea\Model;

class taskStatuses extends Model
{
    /**
     * @example 16190385
     *
     * @var string
     */
    public $taskId;

    /**
     * @var taskStatusList[]
     */
    public $taskStatusList;
    protected $_name = [
        'taskId'         => 'TaskId',
        'taskStatusList' => 'TaskStatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatusList) {
            $res['TaskStatusList'] = [];
            if (null !== $this->taskStatusList && \is_array($this->taskStatusList)) {
                $n = 0;
                foreach ($this->taskStatusList as $item) {
                    $res['TaskStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskStatuses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatusList'])) {
            if (!empty($map['TaskStatusList'])) {
                $model->taskStatusList = [];
                $n                     = 0;
                foreach ($map['TaskStatusList'] as $item) {
                    $model->taskStatusList[$n++] = null !== $item ? taskStatusList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
