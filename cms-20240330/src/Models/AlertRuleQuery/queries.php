<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\queries\apmFilters;

class queries extends Model
{
    /**
     * @var string
     */
    public $apmAlertMetricId;

    /**
     * @var apmFilters[]
     */
    public $apmFilters;

    /**
     * @var string[]
     */
    public $apmGroupBy;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $end;

    /**
     * @var string
     */
    public $expr;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $timeUnit;

    /**
     * @var int
     */
    public $window;
    protected $_name = [
        'apmAlertMetricId' => 'apmAlertMetricId',
        'apmFilters' => 'apmFilters',
        'apmGroupBy' => 'apmGroupBy',
        'duration' => 'duration',
        'end' => 'end',
        'expr' => 'expr',
        'start' => 'start',
        'timeUnit' => 'timeUnit',
        'window' => 'window',
    ];

    public function validate()
    {
        if (\is_array($this->apmFilters)) {
            Model::validateArray($this->apmFilters);
        }
        if (\is_array($this->apmGroupBy)) {
            Model::validateArray($this->apmGroupBy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apmAlertMetricId) {
            $res['apmAlertMetricId'] = $this->apmAlertMetricId;
        }

        if (null !== $this->apmFilters) {
            if (\is_array($this->apmFilters)) {
                $res['apmFilters'] = [];
                $n1 = 0;
                foreach ($this->apmFilters as $item1) {
                    $res['apmFilters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->apmGroupBy) {
            if (\is_array($this->apmGroupBy)) {
                $res['apmGroupBy'] = [];
                $n1 = 0;
                foreach ($this->apmGroupBy as $item1) {
                    $res['apmGroupBy'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        if (null !== $this->expr) {
            $res['expr'] = $this->expr;
        }

        if (null !== $this->start) {
            $res['start'] = $this->start;
        }

        if (null !== $this->timeUnit) {
            $res['timeUnit'] = $this->timeUnit;
        }

        if (null !== $this->window) {
            $res['window'] = $this->window;
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
        if (isset($map['apmAlertMetricId'])) {
            $model->apmAlertMetricId = $map['apmAlertMetricId'];
        }

        if (isset($map['apmFilters'])) {
            if (!empty($map['apmFilters'])) {
                $model->apmFilters = [];
                $n1 = 0;
                foreach ($map['apmFilters'] as $item1) {
                    $model->apmFilters[$n1++] = apmFilters::fromMap($item1);
                }
            }
        }

        if (isset($map['apmGroupBy'])) {
            if (!empty($map['apmGroupBy'])) {
                $model->apmGroupBy = [];
                $n1 = 0;
                foreach ($map['apmGroupBy'] as $item1) {
                    $model->apmGroupBy[$n1++] = $item1;
                }
            }
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['expr'])) {
            $model->expr = $map['expr'];
        }

        if (isset($map['start'])) {
            $model->start = $map['start'];
        }

        if (isset($map['timeUnit'])) {
            $model->timeUnit = $map['timeUnit'];
        }

        if (isset($map['window'])) {
            $model->window = $map['window'];
        }

        return $model;
    }
}
