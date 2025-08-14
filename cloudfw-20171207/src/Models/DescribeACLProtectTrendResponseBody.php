<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeACLProtectTrendResponseBody\trendList;

class DescribeACLProtectTrendResponseBody extends Model
{
    /**
     * @var int
     */
    public $inProtectCnt;

    /**
     * @var int
     */
    public $interVPCProtectCnt;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $outProtectCnt;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalProtectCnt;

    /**
     * @var trendList[]
     */
    public $trendList;
    protected $_name = [
        'inProtectCnt' => 'InProtectCnt',
        'interVPCProtectCnt' => 'InterVPCProtectCnt',
        'interval' => 'Interval',
        'outProtectCnt' => 'OutProtectCnt',
        'requestId' => 'RequestId',
        'totalProtectCnt' => 'TotalProtectCnt',
        'trendList' => 'TrendList',
    ];

    public function validate()
    {
        if (\is_array($this->trendList)) {
            Model::validateArray($this->trendList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inProtectCnt) {
            $res['InProtectCnt'] = $this->inProtectCnt;
        }

        if (null !== $this->interVPCProtectCnt) {
            $res['InterVPCProtectCnt'] = $this->interVPCProtectCnt;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->outProtectCnt) {
            $res['OutProtectCnt'] = $this->outProtectCnt;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalProtectCnt) {
            $res['TotalProtectCnt'] = $this->totalProtectCnt;
        }

        if (null !== $this->trendList) {
            if (\is_array($this->trendList)) {
                $res['TrendList'] = [];
                $n1 = 0;
                foreach ($this->trendList as $item1) {
                    $res['TrendList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InProtectCnt'])) {
            $model->inProtectCnt = $map['InProtectCnt'];
        }

        if (isset($map['InterVPCProtectCnt'])) {
            $model->interVPCProtectCnt = $map['InterVPCProtectCnt'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['OutProtectCnt'])) {
            $model->outProtectCnt = $map['OutProtectCnt'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalProtectCnt'])) {
            $model->totalProtectCnt = $map['TotalProtectCnt'];
        }

        if (isset($map['TrendList'])) {
            if (!empty($map['TrendList'])) {
                $model->trendList = [];
                $n1 = 0;
                foreach ($map['TrendList'] as $item1) {
                    $model->trendList[$n1] = trendList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
