<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpPoolListResponseBody\ipPools;
use AlibabaCloud\Tea\Model;

class DedicatedIpPoolListResponseBody extends Model
{
    /**
     * @description Current page
     *
     * @example 1
     *
     * @var string
     */
    public $currentPage;

    /**
     * @description Whether there is a next page
     *
     * @example false
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @description List of IP pools
     *
     * @var ipPools[]
     */
    public $ipPools;

    /**
     * @description Page size
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description Request ID
     *
     * @example xxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of data under the current request conditions
     *
     * @example 5
     *
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'hasMore' => 'HasMore',
        'ipPools' => 'IpPools',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCounts' => 'TotalCounts',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }
        if (null !== $this->ipPools) {
            $res['IpPools'] = [];
            if (null !== $this->ipPools && \is_array($this->ipPools)) {
                $n = 0;
                foreach ($this->ipPools as $item) {
                    $res['IpPools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DedicatedIpPoolListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }
        if (isset($map['IpPools'])) {
            if (!empty($map['IpPools'])) {
                $model->ipPools = [];
                $n = 0;
                foreach ($map['IpPools'] as $item) {
                    $model->ipPools[$n++] = null !== $item ? ipPools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }

        return $model;
    }
}
