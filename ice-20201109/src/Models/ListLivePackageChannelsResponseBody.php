<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLivePackageChannelsResponseBody\livePackageChannels;
use AlibabaCloud\Tea\Model;

class ListLivePackageChannelsResponseBody extends Model
{
    /**
     * @description The live package channels.
     *
     * @var livePackageChannels[]
     */
    public $livePackageChannels;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sort order. Valid values: asc and desc (default).
     *
     * @example asc/desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The total number of entries returned.
     *
     * @example 15
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'livePackageChannels' => 'LivePackageChannels',
        'pageNo'              => 'PageNo',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'sortBy'              => 'SortBy',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePackageChannels) {
            $res['LivePackageChannels'] = [];
            if (null !== $this->livePackageChannels && \is_array($this->livePackageChannels)) {
                $n = 0;
                foreach ($this->livePackageChannels as $item) {
                    $res['LivePackageChannels'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListLivePackageChannelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePackageChannels'])) {
            if (!empty($map['LivePackageChannels'])) {
                $model->livePackageChannels = [];
                $n                          = 0;
                foreach ($map['LivePackageChannels'] as $item) {
                    $model->livePackageChannels[$n++] = null !== $item ? livePackageChannels::fromMap($item) : $item;
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
