<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancerRegionsResponseBody\regions;
use AlibabaCloud\Tea\Model;

class ListLoadBalancerRegionsResponseBody extends Model
{
    /**
     * @description Page number
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Number of records per page
     *
     * @example 1024
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description List of region information
     *
     * @var regions[]
     */
    public $regions;

    /**
     * @description Request ID
     *
     * @example 81A5E222-24BF-17EF-9E80-A68D9B8F363D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of records
     *
     * @example 12
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Total number of pages
     *
     * @example 1
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regions' => 'Regions',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regions) {
            $res['Regions'] = [];
            if (null !== $this->regions && \is_array($this->regions)) {
                $n = 0;
                foreach ($this->regions as $item) {
                    $res['Regions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListLoadBalancerRegionsResponseBody
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
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n = 0;
                foreach ($map['Regions'] as $item) {
                    $model->regions[$n++] = null !== $item ? regions::fromMap($item) : $item;
                }
            }
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
