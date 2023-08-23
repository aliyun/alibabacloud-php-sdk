<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsResponseBody\data\runningJobInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var runningJobInfoList[]
     */
    public $runningJobInfoList;

    /**
     * @example 64
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'         => 'pageNumber',
        'pageSize'           => 'pageSize',
        'runningJobInfoList' => 'runningJobInfoList',
        'totalCount'         => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->runningJobInfoList) {
            $res['runningJobInfoList'] = [];
            if (null !== $this->runningJobInfoList && \is_array($this->runningJobInfoList)) {
                $n = 0;
                foreach ($this->runningJobInfoList as $item) {
                    $res['runningJobInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['runningJobInfoList'])) {
            if (!empty($map['runningJobInfoList'])) {
                $model->runningJobInfoList = [];
                $n                         = 0;
                foreach ($map['runningJobInfoList'] as $item) {
                    $model->runningJobInfoList[$n++] = null !== $item ? runningJobInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
