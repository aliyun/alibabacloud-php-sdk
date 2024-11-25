<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponseBody\liveRecordJobs;
use AlibabaCloud\Tea\Model;

class ListLiveRecordJobsResponseBody extends Model
{
    /**
     * @description The list of live stream recording jobs.
     *
     * @var liveRecordJobs[]
     */
    public $liveRecordJobs;

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
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example A27DFFA4-F272-5563-8363-CB0BC42740BA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The sorting order. By default, the query results are sorted by creation time in descending order.
     *
     * @example desc
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The total number of entries returned.
     *
     * @example 180
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'liveRecordJobs' => 'LiveRecordJobs',
        'pageNo'         => 'PageNo',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'sortBy'         => 'SortBy',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveRecordJobs) {
            $res['LiveRecordJobs'] = [];
            if (null !== $this->liveRecordJobs && \is_array($this->liveRecordJobs)) {
                $n = 0;
                foreach ($this->liveRecordJobs as $item) {
                    $res['LiveRecordJobs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListLiveRecordJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveRecordJobs'])) {
            if (!empty($map['LiveRecordJobs'])) {
                $model->liveRecordJobs = [];
                $n                     = 0;
                foreach ($map['LiveRecordJobs'] as $item) {
                    $model->liveRecordJobs[$n++] = null !== $item ? liveRecordJobs::fromMap($item) : $item;
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
