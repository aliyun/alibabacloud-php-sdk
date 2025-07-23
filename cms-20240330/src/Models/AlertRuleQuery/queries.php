<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery;

use AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleQuery\queries\apmFilters;
use AlibabaCloud\Tea\Model;

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
     * @description 时间偏移结束时间(相对)，如果指定了start、end，则不指定window。
     *
     * @var int
     */
    public $end;

    /**
     * @description 查询表达式
     *
     * @var string
     */
    public $expr;

    /**
     * @description sls查询的时间偏移开始时间(相对)，如果指定了start、end，则不指定window。  例如：start=15， timeUnit=minute，表示15分钟前
     *
     * @var int
     */
    public $start;

    /**
     * @description start和end、window的时间单位： day/hour/minute/second
     *
     * @var string
     */
    public $timeUnit;

    /**
     * @description 整点时间查询区间。  如果指定了window则不指定start、end
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apmAlertMetricId) {
            $res['apmAlertMetricId'] = $this->apmAlertMetricId;
        }
        if (null !== $this->apmFilters) {
            $res['apmFilters'] = [];
            if (null !== $this->apmFilters && \is_array($this->apmFilters)) {
                $n = 0;
                foreach ($this->apmFilters as $item) {
                    $res['apmFilters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->apmGroupBy) {
            $res['apmGroupBy'] = $this->apmGroupBy;
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

    /**
     * @param array $map
     *
     * @return queries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apmAlertMetricId'])) {
            $model->apmAlertMetricId = $map['apmAlertMetricId'];
        }
        if (isset($map['apmFilters'])) {
            if (!empty($map['apmFilters'])) {
                $model->apmFilters = [];
                $n = 0;
                foreach ($map['apmFilters'] as $item) {
                    $model->apmFilters[$n++] = null !== $item ? apmFilters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['apmGroupBy'])) {
            if (!empty($map['apmGroupBy'])) {
                $model->apmGroupBy = $map['apmGroupBy'];
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
