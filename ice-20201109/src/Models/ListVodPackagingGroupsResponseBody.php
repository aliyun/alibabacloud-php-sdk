<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListVodPackagingGroupsResponseBody extends Model
{
    /**
     * @description The packaging groups.
     *
     * @var VodPackagingGroup[]
     */
    public $packagingGroups;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sorting order of the packaging groups based on the time when they were created. Valid values:
     *
     *   desc: descending order.
     *   asc: ascending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The total number of entries returned.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'packagingGroups' => 'PackagingGroups',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'sortBy'          => 'SortBy',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packagingGroups) {
            $res['PackagingGroups'] = [];
            if (null !== $this->packagingGroups && \is_array($this->packagingGroups)) {
                $n = 0;
                foreach ($this->packagingGroups as $item) {
                    $res['PackagingGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListVodPackagingGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackagingGroups'])) {
            if (!empty($map['PackagingGroups'])) {
                $model->packagingGroups = [];
                $n                      = 0;
                foreach ($map['PackagingGroups'] as $item) {
                    $model->packagingGroups[$n++] = null !== $item ? VodPackagingGroup::fromMap($item) : $item;
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
