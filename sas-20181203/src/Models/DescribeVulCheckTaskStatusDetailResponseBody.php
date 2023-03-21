<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulCheckTaskStatusDetailResponseBody\taskStatuses;
use AlibabaCloud\Tea\Model;

class DescribeVulCheckTaskStatusDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskStatuses[]
     */
    public $taskStatuses;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'    => 'RequestId',
        'taskStatuses' => 'TaskStatuses',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->taskStatuses) {
            $res['TaskStatuses'] = [];
            if (null !== $this->taskStatuses && \is_array($this->taskStatuses)) {
                $n = 0;
                foreach ($this->taskStatuses as $item) {
                    $res['TaskStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeVulCheckTaskStatusDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskStatuses'])) {
            if (!empty($map['TaskStatuses'])) {
                $model->taskStatuses = [];
                $n                   = 0;
                foreach ($map['TaskStatuses'] as $item) {
                    $model->taskStatuses[$n++] = null !== $item ? taskStatuses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
