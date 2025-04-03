<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class evaluationResults extends Model
{
    /**
     * @var int
     */
    public $nonCompliantResourceCnt;

    /**
     * @var int
     */
    public $nonCompliantRuleCnt;

    /**
     * @var string
     */
    public $statisticDate;

    /**
     * @var int
     */
    public $totalResourceCnt;

    /**
     * @var int
     */
    public $totalRuleCnt;
    protected $_name = [
        'nonCompliantResourceCnt' => 'NonCompliantResourceCnt',
        'nonCompliantRuleCnt' => 'NonCompliantRuleCnt',
        'statisticDate' => 'StatisticDate',
        'totalResourceCnt' => 'TotalResourceCnt',
        'totalRuleCnt' => 'TotalRuleCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonCompliantResourceCnt) {
            $res['NonCompliantResourceCnt'] = $this->nonCompliantResourceCnt;
        }

        if (null !== $this->nonCompliantRuleCnt) {
            $res['NonCompliantRuleCnt'] = $this->nonCompliantRuleCnt;
        }

        if (null !== $this->statisticDate) {
            $res['StatisticDate'] = $this->statisticDate;
        }

        if (null !== $this->totalResourceCnt) {
            $res['TotalResourceCnt'] = $this->totalResourceCnt;
        }

        if (null !== $this->totalRuleCnt) {
            $res['TotalRuleCnt'] = $this->totalRuleCnt;
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
        if (isset($map['NonCompliantResourceCnt'])) {
            $model->nonCompliantResourceCnt = $map['NonCompliantResourceCnt'];
        }

        if (isset($map['NonCompliantRuleCnt'])) {
            $model->nonCompliantRuleCnt = $map['NonCompliantRuleCnt'];
        }

        if (isset($map['StatisticDate'])) {
            $model->statisticDate = $map['StatisticDate'];
        }

        if (isset($map['TotalResourceCnt'])) {
            $model->totalResourceCnt = $map['TotalResourceCnt'];
        }

        if (isset($map['TotalRuleCnt'])) {
            $model->totalRuleCnt = $map['TotalRuleCnt'];
        }

        return $model;
    }
}
