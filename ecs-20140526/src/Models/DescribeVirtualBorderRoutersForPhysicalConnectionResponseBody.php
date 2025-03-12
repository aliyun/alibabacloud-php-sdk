<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody\virtualBorderRouterForPhysicalConnectionSet;
use AlibabaCloud\Tea\Model;

class DescribeVirtualBorderRoutersForPhysicalConnectionResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
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
