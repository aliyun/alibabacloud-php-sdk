<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAsyncTasksResponseBody\asyncTasks;

class DescribeAsyncTasksResponseBody extends Model
{
    /**
     * @var asyncTasks[]
     */
    public $asyncTasks;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'asyncTasks' => 'AsyncTasks',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->asyncTasks)) {
            Model::validateArray($this->asyncTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncTasks) {
            if (\is_array($this->asyncTasks)) {
                $res['AsyncTasks'] = [];
                $n1                = 0;
                foreach ($this->asyncTasks as $item1) {
                    $res['AsyncTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AsyncTasks'])) {
            if (!empty($map['AsyncTasks'])) {
                $model->asyncTasks = [];
                $n1                = 0;
                foreach ($map['AsyncTasks'] as $item1) {
                    $model->asyncTasks[$n1++] = asyncTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
