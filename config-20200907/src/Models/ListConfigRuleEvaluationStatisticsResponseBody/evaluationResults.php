<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class evaluationResults extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $nonCompliantResourceCnt;

    /**
     * @example 5
     *
     * @var int
     */
    public $nonCompliantRuleCnt;

    /**
     * @example 2023-06-27
     *
     * @var string
     */
    public $statisticDate;

    /**
     * @example 91
     *
     * @var int
     */
    public $totalResourceCnt;

    /**
     * @example 13
     *
     * @var int
     */
    public $totalRuleCnt;
    protected $_name = [
        'nonCompliantResourceCnt' => 'NonCompliantResourceCnt',
        'nonCompliantRuleCnt'     => 'NonCompliantRuleCnt',
        'statisticDate'           => 'StatisticDate',
        'totalResourceCnt'        => 'TotalResourceCnt',
        'totalRuleCnt'            => 'TotalRuleCnt',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return evaluationResults
     */
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