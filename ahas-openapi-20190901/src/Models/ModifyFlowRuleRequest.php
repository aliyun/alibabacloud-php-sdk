<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyFlowRuleRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $relationStrategy;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var string
     */
    public $limitOrigin;

    /**
     * @var string
     */
    public $refResource;

    /**
     * @var string
     */
    public $controlBehavior;

    /**
     * @var int
     */
    public $warmUpPeriodSec;

    /**
     * @var int
     */
    public $maxQueueingTimeMs;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'namespace'         => 'Namespace',
        'ruleId'            => 'RuleId',
        'relationStrategy'  => 'RelationStrategy',
        'threshold'         => 'Threshold',
        'limitOrigin'       => 'LimitOrigin',
        'refResource'       => 'RefResource',
        'controlBehavior'   => 'ControlBehavior',
        'warmUpPeriodSec'   => 'WarmUpPeriodSec',
        'maxQueueingTimeMs' => 'MaxQueueingTimeMs',
        'ahasRegionId'      => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->relationStrategy) {
            $res['RelationStrategy'] = $this->relationStrategy;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->limitOrigin) {
            $res['LimitOrigin'] = $this->limitOrigin;
        }
        if (null !== $this->refResource) {
            $res['RefResource'] = $this->refResource;
        }
        if (null !== $this->controlBehavior) {
            $res['ControlBehavior'] = $this->controlBehavior;
        }
        if (null !== $this->warmUpPeriodSec) {
            $res['WarmUpPeriodSec'] = $this->warmUpPeriodSec;
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
     * @return ModifyFlowRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RelationStrategy'])) {
            $model->relationStrategy = $map['RelationStrategy'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['LimitOrigin'])) {
            $model->limitOrigin = $map['LimitOrigin'];
        }
        if (isset($map['RefResource'])) {
            $model->refResource = $map['RefResource'];
        }
        if (isset($map['ControlBehavior'])) {
            $model->controlBehavior = $map['ControlBehavior'];
        }
        if (isset($map['WarmUpPeriodSec'])) {
            $model->warmUpPeriodSec = $map['WarmUpPeriodSec'];
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
