<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeLoadBalancerSpecResponseBody\loadBalancerSpecs;
use AlibabaCloud\Tea\Model;

class DescribeLoadBalancerSpecResponseBody extends Model
{
    /**
     * @description The specifications. Valid values:
     *
     * @var loadBalancerSpecs[]
     */
    public $loadBalancerSpecs;

    /**
     * @description The page number.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 100. Default value: 10.
     *
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 7
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'loadBalancerSpecs' => 'LoadBalancerSpecs',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerSpecs) {
            $res['LoadBalancerSpecs'] = [];
            if (null !== $this->loadBalancerSpecs && \is_array($this->loadBalancerSpecs)) {
                $n = 0;
                foreach ($this->loadBalancerSpecs as $item) {
                    $res['LoadBalancerSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoadBalancerSpecResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoadBalancerSpecs'])) {
            if (!empty($map['LoadBalancerSpecs'])) {
                $model->loadBalancerSpecs = [];
                $n = 0;
                foreach ($map['LoadBalancerSpecs'] as $item) {
                    $model->loadBalancerSpecs[$n++] = null !== $item ? loadBalancerSpecs::fromMap($item) : $item;
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

        return $model;
    }
}
