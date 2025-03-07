<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageChannelGroupsResponseBody\livePackageChannelGroups;
use AlibabaCloud\Tea\Model;

class ListLivePackageChannelGroupsResponseBody extends Model
{
    /**
     * @description The channel groups returned.
     *
     * @var livePackageChannelGroups[]
     */
    public $livePackageChannelGroups;

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
     * @example 5D87B753-0250-5D9D-B248-D40C3271F864
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sort order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'livePackageChannelGroups' => 'LivePackageChannelGroups',
        'pageNo'                   => 'PageNo',
        'pageSize'                 => 'PageSize',
        'requestId'                => 'RequestId',
        'sortBy'                   => 'SortBy',
        'totalCount'               => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePackageChannelGroups) {
            $res['LivePackageChannelGroups'] = [];
            if (null !== $this->livePackageChannelGroups && \is_array($this->livePackageChannelGroups)) {
                $n = 0;
                foreach ($this->livePackageChannelGroups as $item) {
                    $res['LivePackageChannelGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListLivePackageChannelGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePackageChannelGroups'])) {
            if (!empty($map['LivePackageChannelGroups'])) {
                $model->livePackageChannelGroups = [];
                $n                               = 0;
                foreach ($map['LivePackageChannelGroups'] as $item) {
                    $model->livePackageChannelGroups[$n++] = null !== $item ? livePackageChannelGroups::fromMap($item) : $item;
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
