<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeRecordTasksResponseBody\recordTasks;
use AlibabaCloud\Tea\Model;

class DescribeRecordTasksResponseBody extends Model
{
    /**
     * @var recordTasks[]
     */
    public $recordTasks;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'recordTasks' => 'RecordTasks',
        'requestId'   => 'RequestId',
        'totalNum'    => 'TotalNum',
        'totalPage'   => 'TotalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordTasks) {
            $res['RecordTasks'] = [];
            if (null !== $this->recordTasks && \is_array($this->recordTasks)) {
                $n = 0;
                foreach ($this->recordTasks as $item) {
                    $res['RecordTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordTasks'])) {
            if (!empty($map['RecordTasks'])) {
                $model->recordTasks = [];
                $n                  = 0;
                foreach ($map['RecordTasks'] as $item) {
                    $model->recordTasks[$n++] = null !== $item ? recordTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
