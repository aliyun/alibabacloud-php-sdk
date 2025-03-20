<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancersResponseBody\loadBalancers;
use AlibabaCloud\Tea\Model;

class ListLoadBalancersResponseBody extends Model
{
    /**
     * @description An array format that returns the list of load balancers.
     *
     * @var loadBalancers[]
     */
    public $loadBalancers;

    /**
     * @description Page number, same as the PageNumber in the request parameters.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Number of items per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example CB1A380B-09F0-41BB-A198-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of items.
     *
     * @example 100
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
        'loadBalancers' => 'LoadBalancers',
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
        if (null !== $this->loadBalancers) {
            $res['LoadBalancers'] = [];
            if (null !== $this->loadBalancers && \is_array($this->loadBalancers)) {
                $n = 0;
                foreach ($this->loadBalancers as $item) {
                    $res['LoadBalancers'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListLoadBalancersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancers'])) {
            if (!empty($map['LoadBalancers'])) {
                $model->loadBalancers = [];
                $n = 0;
                foreach ($map['LoadBalancers'] as $item) {
                    $model->loadBalancers[$n++] = null !== $item ? loadBalancers::fromMap($item) : $item;
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
