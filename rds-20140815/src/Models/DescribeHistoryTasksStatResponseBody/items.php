<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHistoryTasksStatResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The status of the task. Valid values:
     *
     *   **Scheduled**
     *   **Running**
     *   **Succeed**
     *   **Failed**
     *   **Cancelling**
     *   **Canceled**
     *   **Waiting**
     *
     * @example Succeed,Waiting
     *
     * @var string
     */
    public $status;

    /**
     * @description The total number of tasks.
     *
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'status'     => 'Status',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
