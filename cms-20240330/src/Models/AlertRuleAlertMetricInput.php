<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

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
        'groupId'      => 'groupId',
        'metricId'     => 'metricId',
        'paramValues'  => 'paramValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterValues) {
            $res['filterValues'] = [];
            if (null !== $this->filterValues && \is_array($this->filterValues)) {
                $n = 0;
                foreach ($this->filterValues as $item) {
                    $res['filterValues'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['paramValues'] = [];
            if (null !== $this->paramValues && \is_array($this->paramValues)) {
                $n = 0;
                foreach ($this->paramValues as $item) {
                    $res['paramValues'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AlertRuleAlertMetricInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filterValues'])) {
            if (!empty($map['filterValues'])) {
                $model->filterValues = [];
                $n                   = 0;
                foreach ($map['filterValues'] as $item) {
                    $model->filterValues[$n++] = null !== $item ? AlertRuleAlertMetricInputFilterValue::fromMap($item) : $item;
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
                $n                  = 0;
                foreach ($map['paramValues'] as $item) {
                    $model->paramValues[$n++] = null !== $item ? AlertRuleAlertMetricInputParamValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
