<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageLatestScanTaskResponseBody\task;
use AlibabaCloud\Tea\Model;

class DescribeImageLatestScanTaskResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF4****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the information about the task.
     *
     * @var task[]
     */
    public $task;
    protected $_name = [
        'requestId' => 'RequestId',
        'task'      => 'Task',
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
        if (null !== $this->task) {
            $res['Task'] = [];
            if (null !== $this->task && \is_array($this->task)) {
                $n = 0;
                foreach ($this->task as $item) {
                    $res['Task'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageLatestScanTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Task'])) {
            if (!empty($map['Task'])) {
                $model->task = [];
                $n           = 0;
                foreach ($map['Task'] as $item) {
                    $model->task[$n++] = null !== $item ? task::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
