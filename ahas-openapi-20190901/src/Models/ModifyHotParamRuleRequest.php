<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyHotParamRuleRequest extends Model
{
    /**
     * @var int
     */
    public $metricType;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $paramIdx;

    /**
     * @var int
     */
    public $statDurationSec;

    /**
     * @var int
     */
    public $controlBehavior;

    /**
     * @var int
     */
    public $burstCount;

    /**
     * @var int
     */
    public $maxQueueingTimeMs;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'metricType'        => 'MetricType',
        'threshold'         => 'Threshold',
        'enable'            => 'Enable',
        'ruleId'            => 'RuleId',
        'paramIdx'          => 'ParamIdx',
        'statDurationSec'   => 'StatDurationSec',
        'controlBehavior'   => 'ControlBehavior',
        'burstCount'        => 'BurstCount',
        'maxQueueingTimeMs' => 'MaxQueueingTimeMs',
        'ahasRegionId'      => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->paramIdx) {
            $res['ParamIdx'] = $this->paramIdx;
        }
        if (null !== $this->statDurationSec) {
            $res['StatDurationSec'] = $this->statDurationSec;
        }
        if (null !== $this->controlBehavior) {
            $res['ControlBehavior'] = $this->controlBehavior;
        }
        if (null !== $this->burstCount) {
            $res['BurstCount'] = $this->burstCount;
        }
        if (null !== $this->maxQueueingTimeMs) {
            $res['MaxQueueingTimeMs'] = $this->maxQueueingTimeMs;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHotParamRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ParamIdx'])) {
            $model->paramIdx = $map['ParamIdx'];
        }
        if (isset($map['StatDurationSec'])) {
            $model->statDurationSec = $map['StatDurationSec'];
        }
        if (isset($map['ControlBehavior'])) {
            $model->controlBehavior = $map['ControlBehavior'];
        }
        if (isset($map['BurstCount'])) {
            $model->burstCount = $map['BurstCount'];
        }
        if (isset($map['MaxQueueingTimeMs'])) {
            $model->maxQueueingTimeMs = $map['MaxQueueingTimeMs'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}
