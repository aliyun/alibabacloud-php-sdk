<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody\appScalingRule\behaviour;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody\appScalingRule\metric;
use AlibabaCloud\SDK\Edas\V20170801\Models\CreateApplicationScalingRuleResponseBody\appScalingRule\trigger;

class appScalingRule extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var behaviour
     */
    public $behaviour;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $lastDisableTime;

    /**
     * @var int
     */
    public $maxReplicas;

    /**
     * @var metric
     */
    public $metric;

    /**
     * @var int
     */
    public $minReplicas;

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
     * @var trigger
     */
    public $trigger;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appId' => 'AppId',
        'behaviour' => 'Behaviour',
        'createTime' => 'CreateTime',
        'lastDisableTime' => 'LastDisableTime',
        'maxReplicas' => 'MaxReplicas',
        'metric' => 'Metric',
        'minReplicas' => 'MinReplicas',
        'scaleRuleEnabled' => 'ScaleRuleEnabled',
        'scaleRuleName' => 'ScaleRuleName',
        'scaleRuleType' => 'ScaleRuleType',
        'trigger' => 'Trigger',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->behaviour) {
            $this->behaviour->validate();
        }
        if (null !== $this->metric) {
            $this->metric->validate();
        }
        if (null !== $this->trigger) {
            $this->trigger->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->behaviour) {
            $res['Behaviour'] = null !== $this->behaviour ? $this->behaviour->toArray($noStream) : $this->behaviour;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->lastDisableTime) {
            $res['LastDisableTime'] = $this->lastDisableTime;
        }

        if (null !== $this->maxReplicas) {
            $res['MaxReplicas'] = $this->maxReplicas;
        }

        if (null !== $this->metric) {
            $res['Metric'] = null !== $this->metric ? $this->metric->toArray($noStream) : $this->metric;
        }

        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
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

        if (null !== $this->trigger) {
            $res['Trigger'] = null !== $this->trigger ? $this->trigger->toArray($noStream) : $this->trigger;
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

        if (isset($map['Behaviour'])) {
            $model->behaviour = behaviour::fromMap($map['Behaviour']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['LastDisableTime'])) {
            $model->lastDisableTime = $map['LastDisableTime'];
        }

        if (isset($map['MaxReplicas'])) {
            $model->maxReplicas = $map['MaxReplicas'];
        }

        if (isset($map['Metric'])) {
            $model->metric = metric::fromMap($map['Metric']);
        }

        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
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

        if (isset($map['Trigger'])) {
            $model->trigger = trigger::fromMap($map['Trigger']);
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
