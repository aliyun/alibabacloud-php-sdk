<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeTableDetailResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeTableDetailResponseBody extends Model
{
    /**
     * @example {
     * "PolicyType": "AccountLevelIdentityBasedPolicy",
     * "AuthPrincipalOwnerId": "1*****************7",
     * "AuthPrincipalType": "SubUser",
     * "AuthPrincipalDisplayName": "2***************9",
     * }
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @example 160
     *
     * @var string
     */
    public $avgSize;

    /**
     * @var items
     */
    public $items;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 9
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'avgSize'            => 'AvgSize',
        'items'              => 'Items',
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
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->avgSize) {
            $res['AvgSize'] = $this->avgSize;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
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
     * @return DescribeTableDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['AvgSize'])) {
            $model->avgSize = $map['AvgSize'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
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
