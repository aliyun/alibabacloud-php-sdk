<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponseBody\liveRecordJobs;
use AlibabaCloud\Tea\Model;

class ListLiveRecordJobsResponseBody extends Model
{
    /**
     * @var liveRecordJobs[]
     */
    public $liveRecordJobs;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sortBy;

    /**
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
