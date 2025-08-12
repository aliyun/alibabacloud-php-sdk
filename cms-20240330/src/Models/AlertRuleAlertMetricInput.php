<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertRuleAlertMetricInput extends Model
{
    /**
     * @var AlertRuleAlertMetricInputFilterValue[]
     */
    public $filterValues;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $metricId;

    /**
     * @var AlertRuleAlertMetricInputParamValue[]
     */
    public $paramValues;
    protected $_name = [
        'filterValues' => 'filterValues',
        'groupId' => 'groupId',
        'metricId' => 'metricId',
        'paramValues' => 'paramValues',
    ];

    public function validate()
    {
        if (\is_array($this->filterValues)) {
            Model::validateArray($this->filterValues);
        }
        if (\is_array($this->paramValues)) {
            Model::validateArray($this->paramValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterValues) {
            if (\is_array($this->filterValues)) {
                $res['filterValues'] = [];
                $n1 = 0;
                foreach ($this->filterValues as $item1) {
                    $res['filterValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->metricId) {
            $res['metricId'] = $this->metricId;
        }

        if (null !== $this->paramValues) {
            if (\is_array($this->paramValues)) {
                $res['paramValues'] = [];
                $n1 = 0;
                foreach ($this->paramValues as $item1) {
                    $res['paramValues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['filterValues'])) {
            if (!empty($map['filterValues'])) {
                $model->filterValues = [];
                $n1 = 0;
                foreach ($map['filterValues'] as $item1) {
                    $model->filterValues[$n1] = AlertRuleAlertMetricInputFilterValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['metricId'])) {
            $model->metricId = $map['metricId'];
        }

        if (isset($map['paramValues'])) {
            if (!empty($map['paramValues'])) {
                $model->paramValues = [];
                $n1 = 0;
                foreach ($map['paramValues'] as $item1) {
                    $model->paramValues[$n1] = AlertRuleAlertMetricInputParamValue::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
