<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafTimer;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafTimer\weeklyPeriods\dailyPeriods;

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

    public function validate()
    {
        if (\is_array($this->dailyPeriods)) {
            Model::validateArray($this->dailyPeriods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyPeriods) {
            if (\is_array($this->dailyPeriods)) {
                $res['DailyPeriods'] = [];
                $n1 = 0;
                foreach ($this->dailyPeriods as $item1) {
                    $res['DailyPeriods'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->days) {
            $res['Days'] = $this->days;
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
        if (isset($map['DailyPeriods'])) {
            if (!empty($map['DailyPeriods'])) {
                $model->dailyPeriods = [];
                $n1 = 0;
                foreach ($map['DailyPeriods'] as $item1) {
                    $model->dailyPeriods[$n1] = dailyPeriods::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }

        return $model;
    }
}
