<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeUnprotectedVulnTrendResponseBody\dataList;

class DescribeUnprotectedVulnTrendResponseBody extends Model
{
    /**
     * @var int
     */
    public $curProtectedCnt;

    /**
     * @var int
     */
    public $curUnprotectedCnt;

    /**
     * @var dataList[]
     */
    public $dataList;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'curProtectedCnt' => 'CurProtectedCnt',
        'curUnprotectedCnt' => 'CurUnprotectedCnt',
        'dataList' => 'DataList',
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->dataList)) {
            Model::validateArray($this->dataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->curProtectedCnt) {
            $res['CurProtectedCnt'] = $this->curProtectedCnt;
        }

        if (null !== $this->curUnprotectedCnt) {
            $res['CurUnprotectedCnt'] = $this->curUnprotectedCnt;
        }

        if (null !== $this->dataList) {
            if (\is_array($this->dataList)) {
                $res['DataList'] = [];
                $n1 = 0;
                foreach ($this->dataList as $item1) {
                    $res['DataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CurProtectedCnt'])) {
            $model->curProtectedCnt = $map['CurProtectedCnt'];
        }

        if (isset($map['CurUnprotectedCnt'])) {
            $model->curUnprotectedCnt = $map['CurUnprotectedCnt'];
        }

        if (isset($map['DataList'])) {
            if (!empty($map['DataList'])) {
                $model->dataList = [];
                $n1 = 0;
                foreach ($map['DataList'] as $item1) {
                    $model->dataList[$n1] = dataList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
