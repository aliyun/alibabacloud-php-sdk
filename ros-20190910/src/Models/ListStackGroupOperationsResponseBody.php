<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsResponseBody\stackGroupOperations;
use AlibabaCloud\Tea\Model;

class ListStackGroupOperationsResponseBody extends Model
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
     * @var stackGroupOperations[]
     */
    public $stackGroupOperations;
    protected $_name = [
        'totalCount'           => 'TotalCount',
        'requestId'            => 'RequestId',
        'pageSize'             => 'PageSize',
        'pageNumber'           => 'PageNumber',
        'stackGroupOperations' => 'StackGroupOperations',
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
        if (null !== $this->stackGroupOperations) {
            $res['StackGroupOperations'] = [];
            if (null !== $this->stackGroupOperations && \is_array($this->stackGroupOperations)) {
                $n = 0;
                foreach ($this->stackGroupOperations as $item) {
                    $res['StackGroupOperations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackGroupOperationsResponseBody
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
        if (isset($map['StackGroupOperations'])) {
            if (!empty($map['StackGroupOperations'])) {
                $model->stackGroupOperations = [];
                $n                           = 0;
                foreach ($map['StackGroupOperations'] as $item) {
                    $model->stackGroupOperations[$n++] = null !== $item ? stackGroupOperations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
