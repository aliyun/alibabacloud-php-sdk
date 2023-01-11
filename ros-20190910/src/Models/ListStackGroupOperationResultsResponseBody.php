<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponseBody\stackGroupOperationResults;
use AlibabaCloud\Tea\Model;

class ListStackGroupOperationResultsResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 14A07460-EBE7-47CA-9757-12CC4761D47A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var stackGroupOperationResults[]
     */
    public $stackGroupOperationResults;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'                 => 'PageNumber',
        'pageSize'                   => 'PageSize',
        'requestId'                  => 'RequestId',
        'stackGroupOperationResults' => 'StackGroupOperationResults',
        'totalCount'                 => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
