<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVirtualBorderRoutersResponseBody\virtualBorderRouterSet;
use AlibabaCloud\Tea\Model;

class DescribeVirtualBorderRoutersResponseBody extends Model
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
     * @var virtualBorderRouterSet
     */
    public $virtualBorderRouterSet;
    protected $_name = [
        'totalCount'             => 'TotalCount',
        'requestId'              => 'RequestId',
        'pageSize'               => 'PageSize',
        'pageNumber'             => 'PageNumber',
        'virtualBorderRouterSet' => 'VirtualBorderRouterSet',
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
        if (null !== $this->virtualBorderRouterSet) {
            $res['VirtualBorderRouterSet'] = null !== $this->virtualBorderRouterSet ? $this->virtualBorderRouterSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVirtualBorderRoutersResponseBody
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
        if (isset($map['VirtualBorderRouterSet'])) {
            $model->virtualBorderRouterSet = virtualBorderRouterSet::fromMap($map['VirtualBorderRouterSet']);
        }

        return $model;
    }
}
