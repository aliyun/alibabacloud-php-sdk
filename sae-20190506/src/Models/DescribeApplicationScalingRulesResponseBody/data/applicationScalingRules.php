<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\metric;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationScalingRulesResponseBody\data\applicationScalingRules\timer;

class applicationScalingRules extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $lastDisableTime;

    /**
     * @var metric
     */
    public $metric;

    /**
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @var int
     */
    public $minReadyInstances;

    /**
     * @var bool
     */
    public $scaleRuleEnabled;

    /**
     * @var string
     */
    public $scaleRuleName;

    /**
     * @var string
     */
    public $scaleRuleType;

    /**
     * @var timer
     */
    public $timer;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appId' => 'AppId',
        'createTime' => 'CreateTime',
        'lastDisableTime' => 'LastDisableTime',
        'metric' => 'Metric',
        'minReadyInstanceRatio' => 'MinReadyInstanceRatio',
        'minReadyInstances' => 'MinReadyInstances',
        'scaleRuleEnabled' => 'ScaleRuleEnabled',
        'scaleRuleName' => 'ScaleRuleName',
        'scaleRuleType' => 'ScaleRuleType',
        'timer' => 'Timer',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->metric) {
            $this->metric->validate();
        }
        if (null !== $this->timer) {
            $this->timer->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->lastDisableTime) {
            $res['LastDisableTime'] = $this->lastDisableTime;
        }

        if (null !== $this->metric) {
            $res['Metric'] = null !== $this->metric ? $this->metric->toArray($noStream) : $this->metric;
        }

        if (null !== $this->minReadyInstanceRatio) {
            $res['MinReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }

        if (null !== $this->minReadyInstances) {
            $res['MinReadyInstances'] = $this->minReadyInstances;
        }

        if (null !== $this->scaleRuleEnabled) {
            $res['ScaleRuleEnabled'] = $this->scaleRuleEnabled;
        }

        if (null !== $this->scaleRuleName) {
            $res['ScaleRuleName'] = $this->scaleRuleName;
        }

        if (null !== $this->scaleRuleType) {
            $res['ScaleRuleType'] = $this->scaleRuleType;
        }

        if (null !== $this->timer) {
            $res['Timer'] = null !== $this->timer ? $this->timer->toArray($noStream) : $this->timer;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['LastDisableTime'])) {
            $model->lastDisableTime = $map['LastDisableTime'];
        }

        if (isset($map['Metric'])) {
            $model->metric = metric::fromMap($map['Metric']);
        }

        if (isset($map['MinReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['MinReadyInstanceRatio'];
        }

        if (isset($map['MinReadyInstances'])) {
            $model->minReadyInstances = $map['MinReadyInstances'];
        }

        if (isset($map['ScaleRuleEnabled'])) {
            $model->scaleRuleEnabled = $map['ScaleRuleEnabled'];
        }

        if (isset($map['ScaleRuleName'])) {
            $model->scaleRuleName = $map['ScaleRuleName'];
        }

        if (isset($map['ScaleRuleType'])) {
            $model->scaleRuleType = $map['ScaleRuleType'];
        }

        if (isset($map['Timer'])) {
            $model->timer = timer::fromMap($map['Timer']);
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
