<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafTimer\periods;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafTimer\weeklyPeriods;
use AlibabaCloud\Tea\Model;

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
        'periods'       => 'Periods',
        'scopes'        => 'Scopes',
        'weeklyPeriods' => 'WeeklyPeriods',
        'zone'          => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->periods) {
            $res['Periods'] = [];
            if (null !== $this->periods && \is_array($this->periods)) {
                $n = 0;
                foreach ($this->periods as $item) {
                    $res['Periods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scopes) {
            $res['Scopes'] = $this->scopes;
        }
        if (null !== $this->weeklyPeriods) {
            $res['WeeklyPeriods'] = [];
            if (null !== $this->weeklyPeriods && \is_array($this->weeklyPeriods)) {
                $n = 0;
                foreach ($this->weeklyPeriods as $item) {
                    $res['WeeklyPeriods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WafTimer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Periods'])) {
            if (!empty($map['Periods'])) {
                $model->periods = [];
                $n              = 0;
                foreach ($map['Periods'] as $item) {
                    $model->periods[$n++] = null !== $item ? periods::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scopes'])) {
            $model->scopes = $map['Scopes'];
        }
        if (isset($map['WeeklyPeriods'])) {
            if (!empty($map['WeeklyPeriods'])) {
                $model->weeklyPeriods = [];
                $n                    = 0;
                foreach ($map['WeeklyPeriods'] as $item) {
                    $model->weeklyPeriods[$n++] = null !== $item ? weeklyPeriods::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
