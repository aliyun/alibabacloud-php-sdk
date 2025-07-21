<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\SDK\Dm\V20151123\Models\DedicatedIpListResponseBody\ips;
use AlibabaCloud\Tea\Model;

class DedicatedIpListResponseBody extends Model
{
    /**
     * @description Current page
     *
     * @example 1
     *
     * @var int
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
     * @description IP list
     *
     * @var ips[]
     */
    public $ips;

    /**
     * @description Page size
     *
     * @example 10
     *
     * @var int
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
     * @description Total amount of purchased IP data
     *
     * @example 5
     *
     * @var int
     */
    public $totalCounts;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'hasMore' => 'HasMore',
        'ips' => 'Ips',
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
        if (null !== $this->ips) {
            $res['Ips'] = [];
            if (null !== $this->ips && \is_array($this->ips)) {
                $n = 0;
                foreach ($this->ips as $item) {
                    $res['Ips'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DedicatedIpListResponseBody
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
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = [];
                $n = 0;
                foreach ($map['Ips'] as $item) {
                    $model->ips[$n++] = null !== $item ? ips::fromMap($item) : $item;
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
