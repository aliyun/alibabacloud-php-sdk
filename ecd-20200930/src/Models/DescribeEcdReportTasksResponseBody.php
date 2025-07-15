<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeEcdReportTasksResponseBody\exportTaskList;
use AlibabaCloud\Tea\Model;

class DescribeEcdReportTasksResponseBody extends Model
{
    /**
     * @var exportTaskList[]
     */
    public $exportTaskList;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'exportTaskList' => 'ExportTaskList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportTaskList) {
            $res['ExportTaskList'] = [];
            if (null !== $this->exportTaskList && \is_array($this->exportTaskList)) {
                $n = 0;
                foreach ($this->exportTaskList as $item) {
                    $res['ExportTaskList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeEcdReportTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportTaskList'])) {
            if (!empty($map['ExportTaskList'])) {
                $model->exportTaskList = [];
                $n = 0;
                foreach ($map['ExportTaskList'] as $item) {
                    $model->exportTaskList[$n++] = null !== $item ? exportTaskList::fromMap($item) : $item;
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
