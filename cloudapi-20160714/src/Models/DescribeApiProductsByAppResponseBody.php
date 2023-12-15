<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductsByAppResponseBody\apiProductInfoList;
use AlibabaCloud\Tea\Model;

class DescribeApiProductsByAppResponseBody extends Model
{
    /**
     * @description The information about API products.
     *
     * @var apiProductInfoList
     */
    public $apiProductInfoList;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 0B805201-AF4C-5788-AC9E-C3EEC83DC82A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned entries.
     *
     * @example 4
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiProductInfoList' => 'ApiProductInfoList',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProductInfoList) {
            $res['ApiProductInfoList'] = null !== $this->apiProductInfoList ? $this->apiProductInfoList->toMap() : null;
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
     * @return DescribeApiProductsByAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProductInfoList'])) {
            $model->apiProductInfoList = apiProductInfoList::fromMap($map['ApiProductInfoList']);
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
