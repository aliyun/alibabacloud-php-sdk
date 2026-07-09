<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ApmCompositeCompareConfig extends Model
{
    /**
     * @var string
     */
    public $aggregate;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var float
     */
    public $threshold;

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
        'operator' => 'operator',
        'threshold' => 'threshold',
        'yoyTimeUnit' => 'yoyTimeUnit',
        'yoyTimeValue' => 'yoyTimeValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregate) {
            $res['aggregate'] = $this->aggregate;
        }

        if (null !== $this->operator) {
            $res['operator'] = $this->operator;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
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

        if (isset($map['operator'])) {
            $model->operator = $map['operator'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
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
