<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveRecordJobsResponseBody\liveRecordJobs;

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
        if (\is_array($this->liveRecordJobs)) {
            Model::validateArray($this->liveRecordJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveRecordJobs) {
            if (\is_array($this->liveRecordJobs)) {
                $res['LiveRecordJobs'] = [];
                $n1                    = 0;
                foreach ($this->liveRecordJobs as $item1) {
                    $res['LiveRecordJobs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveRecordJobs'])) {
            if (!empty($map['LiveRecordJobs'])) {
                $model->liveRecordJobs = [];
                $n1                    = 0;
                foreach ($map['LiveRecordJobs'] as $item1) {
                    $model->liveRecordJobs[$n1++] = liveRecordJobs::fromMap($item1);
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
