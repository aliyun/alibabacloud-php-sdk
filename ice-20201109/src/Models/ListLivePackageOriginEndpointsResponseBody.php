<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageOriginEndpointsResponseBody\livePackageOriginEndpoints;
use AlibabaCloud\Tea\Model;

class ListLivePackageOriginEndpointsResponseBody extends Model
{
    /**
     * @description The origin endpoints returned.
     *
     * @var livePackageOriginEndpoints[]
     */
    public $livePackageOriginEndpoints;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example b9f90a7ac8904db28dc18e0c2a72c75d
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sort order. Valid values: `asc` and `desc` (default).
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'livePackageOriginEndpoints' => 'LivePackageOriginEndpoints',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'sortBy' => 'SortBy',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePackageOriginEndpoints) {
            $res['LivePackageOriginEndpoints'] = [];
            if (null !== $this->livePackageOriginEndpoints && \is_array($this->livePackageOriginEndpoints)) {
                $n = 0;
                foreach ($this->livePackageOriginEndpoints as $item) {
                    $res['LivePackageOriginEndpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLivePackageOriginEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePackageOriginEndpoints'])) {
            if (!empty($map['LivePackageOriginEndpoints'])) {
                $model->livePackageOriginEndpoints = [];
                $n = 0;
                foreach ($map['LivePackageOriginEndpoints'] as $item) {
                    $model->livePackageOriginEndpoints[$n++] = null !== $item ? livePackageOriginEndpoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
