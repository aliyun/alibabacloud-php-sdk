<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListOriginPoolsResponseBody\originPools;
use AlibabaCloud\Tea\Model;

class ListOriginPoolsResponseBody extends Model
{
    /**
     * @description List of origin pools.
     *
     * @var originPools[]
     */
    public $originPools;

    /**
     * @description Current page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Request ID.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total count.
     *
     * @example 16
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Total number of pages.
     *
     * @example 10
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'originPools' => 'OriginPools',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->originPools) {
            $res['OriginPools'] = [];
            if (null !== $this->originPools && \is_array($this->originPools)) {
                $n = 0;
                foreach ($this->originPools as $item) {
                    $res['OriginPools'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOriginPoolsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginPools'])) {
            if (!empty($map['OriginPools'])) {
                $model->originPools = [];
                $n = 0;
                foreach ($map['OriginPools'] as $item) {
                    $model->originPools[$n++] = null !== $item ? originPools::fromMap($item) : $item;
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
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
