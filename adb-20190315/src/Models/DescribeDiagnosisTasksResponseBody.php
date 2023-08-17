<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDiagnosisTasksResponseBody\taskList;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosisTasksResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F0983B43-B2EC-536A-8791-142B5CF1E9B6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The queried tasks.
     *
     * @var taskList[]
     */
    public $taskList;

    /**
     * @description The total number of tasks in the stage.
     *
     * @example 33
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'taskList'   => 'TaskList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskList) {
            $res['TaskList'] = [];
            if (null !== $this->taskList && \is_array($this->taskList)) {
                $n = 0;
                foreach ($this->taskList as $item) {
                    $res['TaskList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskList'])) {
            if (!empty($map['TaskList'])) {
                $model->taskList = [];
                $n               = 0;
                foreach ($map['TaskList'] as $item) {
                    $model->taskList[$n++] = null !== $item ? taskList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
