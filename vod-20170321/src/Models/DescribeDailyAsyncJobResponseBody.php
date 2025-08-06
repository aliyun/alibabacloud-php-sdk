<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeDailyAsyncJobResponseBody\dailyJobList;

class DescribeDailyAsyncJobResponseBody extends Model
{
    /**
     * @var dailyJobList[]
     */
    public $dailyJobList;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dailyJobList' => 'DailyJobList',
        'jobType' => 'JobType',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dailyJobList)) {
            Model::validateArray($this->dailyJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyJobList) {
            if (\is_array($this->dailyJobList)) {
                $res['DailyJobList'] = [];
                $n1 = 0;
                foreach ($this->dailyJobList as $item1) {
                    $res['DailyJobList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DailyJobList'])) {
            if (!empty($map['DailyJobList'])) {
                $model->dailyJobList = [];
                $n1 = 0;
                foreach ($map['DailyJobList'] as $item1) {
                    $model->dailyJobList[$n1] = dailyJobList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
