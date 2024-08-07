<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeCustomizeRuleCountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 同类聚合规则数。
     *
     * @example 3
     *
     * @var int
     */
    public $aggregationRuleNum;

    /**
     * @description 自定义规则数。
     *
     * @example 10
     *
     * @var int
     */
    public $customizeRuleNum;

    /**
     * @description 专家规则数。
     *
     * @example 7
     *
     * @var int
     */
    public $expertRuleNum;

    /**
     * @description 图计算规则数。
     *
     * @example 2
     *
     * @var int
     */
    public $graphComputingRuleNum;

    /**
     * @description The number of rules that are used to identify high-risk threats.
     *
     * @example 12
     *
     * @var int
     */
    public $highRuleNum;

    /**
     * @description The total number of rules.
     *
     * @example 20
     *
     * @var int
     */
    public $inUseRuleNum;

    /**
     * @description The number of rules that are used to identify low-risk threats.
     *
     * @example 3
     *
     * @var int
     */
    public $lowRuleNum;

    /**
     * @description The number of rules that are used to identify medium-risk threats.
     *
     * @example 5
     *
     * @var int
     */
    public $mediumRuleNum;

    /**
     * @description 预定义规则数。
     *
     * @example 10
     *
     * @var int
     */
    public $predefinedRuleNum;

    /**
     * @description 告警透传规则数。
     *
     * @example 3
     *
     * @var int
     */
    public $singleAlertRuleNum;

    /**
     * @description 总规则数。
     *
     * @example 10
     *
     * @var int
     */
    public $totalRuleNum;

    /**
     * @description 不产生事件规则数。
     *
     * @example 3
     *
     * @var int
     */
    public $unEventRuleNum;
    protected $_name = [
        'aggregationRuleNum'    => 'AggregationRuleNum',
        'customizeRuleNum'      => 'CustomizeRuleNum',
        'expertRuleNum'         => 'ExpertRuleNum',
        'graphComputingRuleNum' => 'GraphComputingRuleNum',
        'highRuleNum'           => 'HighRuleNum',
        'inUseRuleNum'          => 'InUseRuleNum',
        'lowRuleNum'            => 'LowRuleNum',
        'mediumRuleNum'         => 'MediumRuleNum',
        'predefinedRuleNum'     => 'PredefinedRuleNum',
        'singleAlertRuleNum'    => 'SingleAlertRuleNum',
        'totalRuleNum'          => 'TotalRuleNum',
        'unEventRuleNum'        => 'UnEventRuleNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationRuleNum) {
            $res['AggregationRuleNum'] = $this->aggregationRuleNum;
        }
        if (null !== $this->customizeRuleNum) {
            $res['CustomizeRuleNum'] = $this->customizeRuleNum;
        }
        if (null !== $this->expertRuleNum) {
            $res['ExpertRuleNum'] = $this->expertRuleNum;
        }
        if (null !== $this->graphComputingRuleNum) {
            $res['GraphComputingRuleNum'] = $this->graphComputingRuleNum;
        }
        if (null !== $this->highRuleNum) {
            $res['HighRuleNum'] = $this->highRuleNum;
        }
        if (null !== $this->inUseRuleNum) {
            $res['InUseRuleNum'] = $this->inUseRuleNum;
        }
        if (null !== $this->lowRuleNum) {
            $res['LowRuleNum'] = $this->lowRuleNum;
        }
        if (null !== $this->mediumRuleNum) {
            $res['MediumRuleNum'] = $this->mediumRuleNum;
        }
        if (null !== $this->predefinedRuleNum) {
            $res['PredefinedRuleNum'] = $this->predefinedRuleNum;
        }
        if (null !== $this->singleAlertRuleNum) {
            $res['SingleAlertRuleNum'] = $this->singleAlertRuleNum;
        }
        if (null !== $this->totalRuleNum) {
            $res['TotalRuleNum'] = $this->totalRuleNum;
        }
        if (null !== $this->unEventRuleNum) {
            $res['UnEventRuleNum'] = $this->unEventRuleNum;
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
        if (isset($map['AggregationRuleNum'])) {
            $model->aggregationRuleNum = $map['AggregationRuleNum'];
        }
        if (isset($map['CustomizeRuleNum'])) {
            $model->customizeRuleNum = $map['CustomizeRuleNum'];
        }
        if (isset($map['ExpertRuleNum'])) {
            $model->expertRuleNum = $map['ExpertRuleNum'];
        }
        if (isset($map['GraphComputingRuleNum'])) {
            $model->graphComputingRuleNum = $map['GraphComputingRuleNum'];
        }
        if (isset($map['HighRuleNum'])) {
            $model->highRuleNum = $map['HighRuleNum'];
        }
        if (isset($map['InUseRuleNum'])) {
            $model->inUseRuleNum = $map['InUseRuleNum'];
        }
        if (isset($map['LowRuleNum'])) {
            $model->lowRuleNum = $map['LowRuleNum'];
        }
        if (isset($map['MediumRuleNum'])) {
            $model->mediumRuleNum = $map['MediumRuleNum'];
        }
        if (isset($map['PredefinedRuleNum'])) {
            $model->predefinedRuleNum = $map['PredefinedRuleNum'];
        }
        if (isset($map['SingleAlertRuleNum'])) {
            $model->singleAlertRuleNum = $map['SingleAlertRuleNum'];
        }
        if (isset($map['TotalRuleNum'])) {
            $model->totalRuleNum = $map['TotalRuleNum'];
        }
        if (isset($map['UnEventRuleNum'])) {
            $model->unEventRuleNum = $map['UnEventRuleNum'];
        }

        return $model;
    }
}
