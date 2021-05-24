<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancersResponseBody\loadBalancers;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var loadBalancers
     */
    public $loadBalancers;
    protected $_name = [
        'requestId'     => 'RequestId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'totalCount'    => 'TotalCount',
        'loadBalancers' => 'LoadBalancers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->loadBalancers) {
            $res['LoadBalancers'] = null !== $this->loadBalancers ? $this->loadBalancers->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['LoadBalancers'])) {
            $model->loadBalancers = loadBalancers::fromMap($map['LoadBalancers']);
        }

        return $model;
    }
}
