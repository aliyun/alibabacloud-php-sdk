<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVulCheckTaskStatusDetailResponseBody\taskStatuses;

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
        if (\is_array($this->taskStatuses)) {
            Model::validateArray($this->taskStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskStatuses) {
            if (\is_array($this->taskStatuses)) {
                $res['TaskStatuses'] = [];
                $n1                  = 0;
                foreach ($this->taskStatuses as $item1) {
                    $res['TaskStatuses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TaskStatuses'])) {
            if (!empty($map['TaskStatuses'])) {
                $model->taskStatuses = [];
                $n1                  = 0;
                foreach ($map['TaskStatuses'] as $item1) {
                    $model->taskStatuses[$n1++] = taskStatuses::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
