<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody\virtualBorderRouterForPhysicalConnectionSet;
use AlibabaCloud\Tea\Model;

class DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody extends Model
{
    /**
     * @description The page number of the returned page. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 7C5AE8B3-A2D8-428D-A2FF-93A225C0821E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The information about VBRs.
     *
     * @var virtualBorderRouterForPhysicalConnectionSet
     */
    public $virtualBorderRouterForPhysicalConnectionSet;
    protected $_name = [
        'pageNumber'                                  => 'PageNumber',
        'pageSize'                                    => 'PageSize',
        'requestId'                                   => 'RequestId',
        'totalCount'                                  => 'TotalCount',
        'virtualBorderRouterForPhysicalConnectionSet' => 'VirtualBorderRouterForPhysicalConnectionSet',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->virtualBorderRouterForPhysicalConnectionSet) {
            $res['VirtualBorderRouterForPhysicalConnectionSet'] = null !== $this->virtualBorderRouterForPhysicalConnectionSet ? $this->virtualBorderRouterForPhysicalConnectionSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VirtualBorderRouterForPhysicalConnectionSet'])) {
            $model->virtualBorderRouterForPhysicalConnectionSet = virtualBorderRouterForPhysicalConnectionSet::fromMap($map['VirtualBorderRouterForPhysicalConnectionSet']);
        }

        return $model;
    }
}
