<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPlanTaskResponseBody\taskList;
use AlibabaCloud\Tea\Model;

class DescribeSQLPlanTaskResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of tasks.
     *
     * @var taskList[]
     */
    public $taskList;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskList'  => 'TaskList',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLPlanTaskResponseBody
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

        return $model;
    }
}
