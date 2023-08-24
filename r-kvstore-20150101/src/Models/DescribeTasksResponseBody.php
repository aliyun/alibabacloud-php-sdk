<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTasksResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeTasksResponseBody extends Model
{
    /**
     * @description The estimated remaining duration of the task. Unit: seconds.
     *
     * >  If the task is not running, this parameter is not returned or the returned value is **0**.
     * @var items[]
     */
    public $items;

    /**
     * @description The ID of the instance. You can call the [DescribeInstances](~~60933~~) operation to query instance IDs.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 30
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The status of the task. Separate multiple values with commas (,). Valid values:
     *
     *   **0**: The task is pending.
     *   **1**: The task is running.
     *   **2**: The task is complete.
     *   **4**: The task is closed.
     *   **7**: The task is paused.
     *   **8**: The task is interrupted.
     *
     * @example 608FAEC9-485E-4C65-82DE-2E5B955E****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the subtask in the JSON format. This includes the expected remaining duration (**remain**), the name of the subtask (**name**), and the task progress (**progress**).
     *
     * >  If the subtask does not exist, this parameter is not returned.
     * @example 2
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'items'            => 'Items',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
