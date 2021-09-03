<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponseBody\stackGroupOperationResults;
use AlibabaCloud\Tea\Model;

class ListStackGroupOperationResultsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var stackGroupOperationResults[]
     */
    public $stackGroupOperationResults;
    protected $_name = [
        'totalCount'                 => 'TotalCount',
        'requestId'                  => 'RequestId',
        'pageSize'                   => 'PageSize',
        'pageNumber'                 => 'PageNumber',
        'stackGroupOperationResults' => 'StackGroupOperationResults',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->stackGroupOperationResults) {
            $res['StackGroupOperationResults'] = [];
            if (null !== $this->stackGroupOperationResults && \is_array($this->stackGroupOperationResults)) {
                $n = 0;
                foreach ($this->stackGroupOperationResults as $item) {
                    $res['StackGroupOperationResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackGroupOperationResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['StackGroupOperationResults'])) {
            if (!empty($map['StackGroupOperationResults'])) {
                $model->stackGroupOperationResults = [];
                $n                                 = 0;
                foreach ($map['StackGroupOperationResults'] as $item) {
                    $model->stackGroupOperationResults[$n++] = null !== $item ? stackGroupOperationResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
