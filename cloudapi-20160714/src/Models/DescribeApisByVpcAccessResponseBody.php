<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByVpcAccessResponseBody\apiVpcAccessInfos;
use AlibabaCloud\Tea\Model;

class DescribeApisByVpcAccessResponseBody extends Model
{
    /**
     * @var apiVpcAccessInfos
     */
    public $apiVpcAccessInfos;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 4E707B25-5119-5ACF-9D26-7D2A2762F05C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 12
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiVpcAccessInfos' => 'ApiVpcAccessInfos',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVpcAccessInfos) {
            $res['ApiVpcAccessInfos'] = null !== $this->apiVpcAccessInfos ? $this->apiVpcAccessInfos->toMap() : null;
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
     * @return DescribeApisByVpcAccessResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVpcAccessInfos'])) {
            $model->apiVpcAccessInfos = apiVpcAccessInfos::fromMap($map['ApiVpcAccessInfos']);
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
