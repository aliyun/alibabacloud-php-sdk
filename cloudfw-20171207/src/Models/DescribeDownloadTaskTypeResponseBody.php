<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDownloadTaskTypeResponseBody\taskTypeArray;

class DescribeDownloadTaskTypeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var taskTypeArray[]
     */
    public $taskTypeArray;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskTypeArray' => 'TaskTypeArray',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->taskTypeArray)) {
            Model::validateArray($this->taskTypeArray);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskTypeArray) {
            if (\is_array($this->taskTypeArray)) {
                $res['TaskTypeArray'] = [];
                $n1 = 0;
                foreach ($this->taskTypeArray as $item1) {
                    $res['TaskTypeArray'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TaskTypeArray'])) {
            if (!empty($map['TaskTypeArray'])) {
                $model->taskTypeArray = [];
                $n1 = 0;
                foreach ($map['TaskTypeArray'] as $item1) {
                    $model->taskTypeArray[$n1++] = taskTypeArray::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
