<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneTasksResponseBody\taskDetails;
use AlibabaCloud\Tea\Model;

class DescribeLorneTasksResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var taskDetails[]
     */
    public $taskDetails;
    protected $_name = [
        'totalCount'  => 'TotalCount',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'pageNumber'  => 'PageNumber',
        'taskDetails' => 'TaskDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->taskDetails) {
            $res['TaskDetails'] = [];
            if (null !== $this->taskDetails && \is_array($this->taskDetails)) {
                $n = 0;
                foreach ($this->taskDetails as $item) {
                    $res['TaskDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLorneTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TaskDetails'])) {
            if (!empty($map['TaskDetails'])) {
                $model->taskDetails = [];
                $n                  = 0;
                foreach ($map['TaskDetails'] as $item) {
                    $model->taskDetails[$n++] = null !== $item ? taskDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
