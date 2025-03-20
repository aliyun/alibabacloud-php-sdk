<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafTimer;

use AlibabaCloud\SDK\ESA\V20240910\Models\WafTimer\weeklyPeriods\dailyPeriods;
use AlibabaCloud\Tea\Model;

class weeklyPeriods extends Model
{
    /**
     * @var dailyPeriods[]
     */
    public $dailyPeriods;

    /**
     * @var string
     */
    public $days;
    protected $_name = [
        'dailyPeriods' => 'DailyPeriods',
        'days' => 'Days',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dailyPeriods) {
            $res['DailyPeriods'] = [];
            if (null !== $this->dailyPeriods && \is_array($this->dailyPeriods)) {
                $n = 0;
                foreach ($this->dailyPeriods as $item) {
                    $res['DailyPeriods'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return weeklyPeriods
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DailyPeriods'])) {
            if (!empty($map['DailyPeriods'])) {
                $model->dailyPeriods = [];
                $n = 0;
                foreach ($map['DailyPeriods'] as $item) {
                    $model->dailyPeriods[$n++] = null !== $item ? dailyPeriods::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        return $model;
    }
}
