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
     * @var int
     */
    public $durationSecs;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $relation;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var ApmThresholdConfig[]
     */
    public $thresholdList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'aggregate' => 'aggregate',
        'compareList' => 'compareList',
        'durationSecs' => 'durationSecs',
        'operator' => 'operator',
        'relation' => 'relation',
        'severity' => 'severity',
        'threshold' => 'threshold',
        'thresholdList' => 'thresholdList',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->compareList)) {
            Model::validateArray($this->compareList);
        }
        if (\is_array($this->thresholdList)) {
            Model::validateArray($this->thresholdList);
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

        if (null !== $this->durationSecs) {
            $res['durationSecs'] = $this->durationSecs;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->relation) {
            $res['relation'] = $this->relation;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
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

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['durationSecs'])) {
            $model->durationSecs = $map['durationSecs'];
        }

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['relation'])) {
            $model->relation = $map['relation'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
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

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
