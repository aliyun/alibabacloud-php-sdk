<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouteTableListResponseBody\routerTableList;
use AlibabaCloud\Tea\Model;

class DescribeRouteTableListResponseBody extends Model
{
    /**
     * @description The ID of the route table.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The type of the cloud resource with which the route table is associated. Valid values:
     *
     *   **VSwitch**: vSwitch
     *   **Gateway**: IPv4 gateway
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the vRouter to which the route table belongs.
     *
     * @example DC668356-BCB4-42FD-9BC3-FA2B2E04B634
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The description of the route table.
     *
     * @var routerTableList
     */
    public $routerTableList;

    /**
     * @description The ID of the Alibaba Cloud account to which the route table belongs.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'routerTableList' => 'RouterTableList',
        'totalCount'      => 'TotalCount',
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
        if (null !== $this->routerTableList) {
            $res['RouterTableList'] = null !== $this->routerTableList ? $this->routerTableList->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouteTableListResponseBody
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
        if (isset($map['RouterTableList'])) {
            $model->routerTableList = routerTableList::fromMap($map['RouterTableList']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
