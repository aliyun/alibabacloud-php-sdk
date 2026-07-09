<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ConditionConfigUnified extends Model
{
    /**
     * @var string
     */
    public $aggregate;

    /**
     * @var ApmCompositeCompareConfig[]
     */
    public $compareList;

    /**
     * @var CloudMonitoringCompositeEscalation
     */
    public $compositeEscalation;

    /**
     * @var string
     */
    public $countOperator;

    /**
     * @var int
     */
    public $countThreshold;

    /**
     * @var int
     */
    public $durationSecs;

    /**
     * @var bool
     */
    public $enableSeveritySuppression;

    /**
     * @var string
     */
    public $escalationType;

    /**
     * @var CloudMonitoringExpressEscalation
     */
    public $expressEscalation;

    /**
     * @var string
     */
    public $legacyRaw;

    /**
     * @var string
     */
    public $legacyType;

    /**
     * @var string
     */
    public $matchField;

    /**
     * @var string
     */
    public $matchOperator;

    /**
     * @var string
     */
    public $matchValue;

    /**
     * @var float
     */
    public $max;

    /**
     * @var float
     */
    public $min;

    /**
     * @var string
     */
    public $noDataPolicy;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var CloudMonitoringPrometheusEscalation
     */
    public $prometheus;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var CloudMonitoringSimpleEscalation
     */
    public $simpleEscalation;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var ApmThresholdConfig[]
     */
    public $thresholdList;

    /**
     * @var MetricSetMultiTrigger[]
     */
    public $triggers;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $yoyTimeUnit;

    /**
     * @var int
     */
    public $yoyTimeValue;
    protected $_name = [
        'aggregate' => 'aggregate',
        'compareList' => 'compareList',
        'compositeEscalation' => 'compositeEscalation',
        'countOperator' => 'countOperator',
        'countThreshold' => 'countThreshold',
        'durationSecs' => 'durationSecs',
        'enableSeveritySuppression' => 'enableSeveritySuppression',
        'escalationType' => 'escalationType',
        'expressEscalation' => 'expressEscalation',
        'legacyRaw' => 'legacyRaw',
        'legacyType' => 'legacyType',
        'matchField' => 'matchField',
        'matchOperator' => 'matchOperator',
        'matchValue' => 'matchValue',
        'max' => 'max',
        'min' => 'min',
        'noDataPolicy' => 'noDataPolicy',
        'operator' => 'operator',
        'prometheus' => 'prometheus',
        'relation' => 'relation',
        'severity' => 'severity',
        'simpleEscalation' => 'simpleEscalation',
        'threshold' => 'threshold',
        'thresholdList' => 'thresholdList',
        'triggers' => 'triggers',
        'type' => 'type',
        'yoyTimeUnit' => 'yoyTimeUnit',
        'yoyTimeValue' => 'yoyTimeValue',
    ];

    public function validate()
    {
        if (\is_array($this->compareList)) {
            Model::validateArray($this->compareList);
        }
        if (null !== $this->compositeEscalation) {
            $this->compositeEscalation->validate();
        }
        if (null !== $this->expressEscalation) {
            $this->expressEscalation->validate();
        }
        if (null !== $this->prometheus) {
            $this->prometheus->validate();
        }
        if (null !== $this->simpleEscalation) {
            $this->simpleEscalation->validate();
        }
        if (\is_array($this->thresholdList)) {
            Model::validateArray($this->thresholdList);
        }
        if (\is_array($this->triggers)) {
            Model::validateArray($this->triggers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregate) {
            $res['aggregate'] = $this->aggregate;
        }

        if (null !== $this->compareList) {
            if (\is_array($this->compareList)) {
                $res['compareList'] = [];
                $n1 = 0;
                foreach ($this->compareList as $item1) {
                    $res['compareList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->compositeEscalation) {
            $res['compositeEscalation'] = null !== $this->compositeEscalation ? $this->compositeEscalation->toArray($noStream) : $this->compositeEscalation;
        }

        if (null !== $this->countOperator) {
            $res['countOperator'] = $this->countOperator;
        }

        if (null !== $this->countThreshold) {
            $res['countThreshold'] = $this->countThreshold;
        }

        if (null !== $this->durationSecs) {
            $res['durationSecs'] = $this->durationSecs;
        }

        if (null !== $this->enableSeveritySuppression) {
            $res['enableSeveritySuppression'] = $this->enableSeveritySuppression;
        }

        if (null !== $this->escalationType) {
            $res['escalationType'] = $this->escalationType;
        }

        if (null !== $this->expressEscalation) {
            $res['expressEscalation'] = null !== $this->expressEscalation ? $this->expressEscalation->toArray($noStream) : $this->expressEscalation;
        }

        if (null !== $this->legacyRaw) {
            $res['legacyRaw'] = $this->legacyRaw;
        }

        if (null !== $this->legacyType) {
            $res['legacyType'] = $this->legacyType;
        }

        if (null !== $this->matchField) {
            $res['matchField'] = $this->matchField;
        }

        if (null !== $this->matchOperator) {
            $res['matchOperator'] = $this->matchOperator;
        }

        if (null !== $this->matchValue) {
            $res['matchValue'] = $this->matchValue;
        }

        if (null !== $this->max) {
            $res['max'] = $this->max;
        }

        if (null !== $this->min) {
            $res['min'] = $this->min;
        }

        if (null !== $this->noDataPolicy) {
            $res['noDataPolicy'] = $this->noDataPolicy;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->prometheus) {
            $res['prometheus'] = null !== $this->prometheus ? $this->prometheus->toArray($noStream) : $this->prometheus;
        }

        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
        }

        if (null !== $this->simpleEscalation) {
            $res['simpleEscalation'] = null !== $this->simpleEscalation ? $this->simpleEscalation->toArray($noStream) : $this->simpleEscalation;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }

        if (null !== $this->thresholdList) {
            if (\is_array($this->thresholdList)) {
                $res['thresholdList'] = [];
                $n1 = 0;
                foreach ($this->thresholdList as $item1) {
                    $res['thresholdList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->triggers) {
            if (\is_array($this->triggers)) {
                $res['triggers'] = [];
                $n1 = 0;
                foreach ($this->triggers as $item1) {
                    $res['triggers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->yoyTimeUnit) {
            $res['yoyTimeUnit'] = $this->yoyTimeUnit;
        }

        if (null !== $this->yoyTimeValue) {
            $res['yoyTimeValue'] = $this->yoyTimeValue;
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
        if (isset($map['aggregate'])) {
            $model->aggregate = $map['aggregate'];
        }

        if (isset($map['compareList'])) {
            if (!empty($map['compareList'])) {
                $model->compareList = [];
                $n1 = 0;
                foreach ($map['compareList'] as $item1) {
                    $model->compareList[$n1] = ApmCompositeCompareConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['compositeEscalation'])) {
            $model->compositeEscalation = CloudMonitoringCompositeEscalation::fromMap($map['compositeEscalation']);
        }

        if (isset($map['countOperator'])) {
            $model->countOperator = $map['countOperator'];
        }

        if (isset($map['countThreshold'])) {
            $model->countThreshold = $map['countThreshold'];
        }

        if (isset($map['durationSecs'])) {
            $model->durationSecs = $map['durationSecs'];
        }

        if (isset($map['enableSeveritySuppression'])) {
            $model->enableSeveritySuppression = $map['enableSeveritySuppression'];
        }

        if (isset($map['escalationType'])) {
            $model->escalationType = $map['escalationType'];
        }

        if (isset($map['expressEscalation'])) {
            $model->expressEscalation = CloudMonitoringExpressEscalation::fromMap($map['expressEscalation']);
        }

        if (isset($map['legacyRaw'])) {
            $model->legacyRaw = $map['legacyRaw'];
        }

        if (isset($map['legacyType'])) {
            $model->legacyType = $map['legacyType'];
        }

        if (isset($map['matchField'])) {
            $model->matchField = $map['matchField'];
        }

        if (isset($map['matchOperator'])) {
            $model->matchOperator = $map['matchOperator'];
        }

        if (isset($map['matchValue'])) {
            $model->matchValue = $map['matchValue'];
        }

        if (isset($map['max'])) {
            $model->max = $map['max'];
        }

        if (isset($map['min'])) {
            $model->min = $map['min'];
        }

        if (isset($map['noDataPolicy'])) {
            $model->noDataPolicy = $map['noDataPolicy'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['prometheus'])) {
            $model->prometheus = CloudMonitoringPrometheusEscalation::fromMap($map['prometheus']);
        }

        if (isset($map['relation'])) {
            $model->relation = $map['relation'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        if (isset($map['simpleEscalation'])) {
            $model->simpleEscalation = CloudMonitoringSimpleEscalation::fromMap($map['simpleEscalation']);
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        if (isset($map['thresholdList'])) {
            if (!empty($map['thresholdList'])) {
                $model->thresholdList = [];
                $n1 = 0;
                foreach ($map['thresholdList'] as $item1) {
                    $model->thresholdList[$n1] = ApmThresholdConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['triggers'])) {
            if (!empty($map['triggers'])) {
                $model->triggers = [];
                $n1 = 0;
                foreach ($map['triggers'] as $item1) {
                    $model->triggers[$n1] = MetricSetMultiTrigger::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['yoyTimeUnit'])) {
            $model->yoyTimeUnit = $map['yoyTimeUnit'];
        }

        if (isset($map['yoyTimeValue'])) {
            $model->yoyTimeValue = $map['yoyTimeValue'];
        }

        return $model;
    }
}
