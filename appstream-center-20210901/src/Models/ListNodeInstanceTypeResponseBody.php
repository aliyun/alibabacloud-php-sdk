<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponseBody\nodeInstanceTypeModels;
use AlibabaCloud\Tea\Model;

class ListNodeInstanceTypeResponseBody extends Model
{
    /**
     * @description The resource types.
     *
     * @var nodeInstanceTypeModels[]
     */
    public $nodeInstanceTypeModels;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 6
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nodeInstanceTypeModels' => 'NodeInstanceTypeModels',
        'pageNumber'             => 'PageNumber',
        'pageSize'               => 'PageSize',
        'requestId'              => 'RequestId',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeInstanceTypeModels) {
            $res['NodeInstanceTypeModels'] = [];
            if (null !== $this->nodeInstanceTypeModels && \is_array($this->nodeInstanceTypeModels)) {
                $n = 0;
                foreach ($this->nodeInstanceTypeModels as $item) {
                    $res['NodeInstanceTypeModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return ListNodeInstanceTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeInstanceTypeModels'])) {
            if (!empty($map['NodeInstanceTypeModels'])) {
                $model->nodeInstanceTypeModels = [];
                $n                             = 0;
                foreach ($map['NodeInstanceTypeModels'] as $item) {
                    $model->nodeInstanceTypeModels[$n++] = null !== $item ? nodeInstanceTypeModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
