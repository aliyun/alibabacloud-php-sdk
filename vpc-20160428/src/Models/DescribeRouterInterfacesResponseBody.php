<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeRouterInterfacesResponseBody\routerInterfaceSet;
use AlibabaCloud\Tea\Model;

class DescribeRouterInterfacesResponseBody extends Model
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
     * @var routerInterfaceSet
     */
    public $routerInterfaceSet;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'routerInterfaceSet' => 'RouterInterfaceSet',
        'totalCount'         => 'TotalCount',
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
        if (null !== $this->routerInterfaceSet) {
            $res['RouterInterfaceSet'] = null !== $this->routerInterfaceSet ? $this->routerInterfaceSet->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRouterInterfacesResponseBody
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
        if (isset($map['RouterInterfaceSet'])) {
            $model->routerInterfaceSet = routerInterfaceSet::fromMap($map['RouterInterfaceSet']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
