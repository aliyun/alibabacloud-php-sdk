<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafTimer\periods;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafTimer\weeklyPeriods;

class WafTimer extends Model
{
    /**
     * @var periods[]
     */
    public $periods;

    /**
     * @var string
     */
    public $scopes;

    /**
     * @var weeklyPeriods[]
     */
    public $weeklyPeriods;

    /**
     * @var int
     */
    public $zone;
    protected $_name = [
        'periods' => 'Periods',
        'scopes' => 'Scopes',
        'weeklyPeriods' => 'WeeklyPeriods',
        'zone' => 'Zone',
    ];

    public function validate()
    {
        if (\is_array($this->periods)) {
            Model::validateArray($this->periods);
        }
        if (\is_array($this->weeklyPeriods)) {
            Model::validateArray($this->weeklyPeriods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->periods) {
            if (\is_array($this->periods)) {
                $res['Periods'] = [];
                $n1 = 0;
                foreach ($this->periods as $item1) {
                    $res['Periods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scopes) {
            $res['Scopes'] = $this->scopes;
        }

        if (null !== $this->weeklyPeriods) {
            if (\is_array($this->weeklyPeriods)) {
                $res['WeeklyPeriods'] = [];
                $n1 = 0;
                foreach ($this->weeklyPeriods as $item1) {
                    $res['WeeklyPeriods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
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
        if (isset($map['Periods'])) {
            if (!empty($map['Periods'])) {
                $model->periods = [];
                $n1 = 0;
                foreach ($map['Periods'] as $item1) {
                    $model->periods[$n1] = periods::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Scopes'])) {
            $model->scopes = $map['Scopes'];
        }

        if (isset($map['WeeklyPeriods'])) {
            if (!empty($map['WeeklyPeriods'])) {
                $model->weeklyPeriods = [];
                $n1 = 0;
                foreach ($map['WeeklyPeriods'] as $item1) {
                    $model->weeklyPeriods[$n1] = weeklyPeriods::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
