<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeEcdReportTasksResponseBody\exportTaskList;

class DescribeEcdReportTasksResponseBody extends Model
{
    /**
     * @var exportTaskList[]
     */
    public $exportTaskList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'exportTaskList' => 'ExportTaskList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->exportTaskList)) {
            Model::validateArray($this->exportTaskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exportTaskList) {
            if (\is_array($this->exportTaskList)) {
                $res['ExportTaskList'] = [];
                $n1 = 0;
                foreach ($this->exportTaskList as $item1) {
                    $res['ExportTaskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ExportTaskList'])) {
            if (!empty($map['ExportTaskList'])) {
                $model->exportTaskList = [];
                $n1 = 0;
                foreach ($map['ExportTaskList'] as $item1) {
                    $model->exportTaskList[$n1] = exportTaskList::fromMap($item1);
                    ++$n1;
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
