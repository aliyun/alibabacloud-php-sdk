<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisTasksResponseBody\taskList;

class DescribeDiagnosisTasksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskList[]
     */
    public $taskList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskList' => 'TaskList',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskList) {
            if (\is_array($this->taskList)) {
                $res['TaskList'] = [];
                $n1 = 0;
                foreach ($this->taskList as $item1) {
                    $res['TaskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskList'])) {
            if (!empty($map['TaskList'])) {
                $model->taskList = [];
                $n1 = 0;
                foreach ($map['TaskList'] as $item1) {
                    $model->taskList[$n1++] = taskList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
