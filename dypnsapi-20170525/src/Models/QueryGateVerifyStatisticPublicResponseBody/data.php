<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicResponseBody;

use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicResponseBody\data\dayStatistic;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var dayStatistic[]
     */
    public $dayStatistic;

    /**
     * @example 20
     *
     * @var int
     */
    public $total;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalFail;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalSuccess;

    /**
     * @example 0
     *
     * @var int
     */
    public $totalUnknown;
    protected $_name = [
        'dayStatistic' => 'DayStatistic',
        'total'        => 'Total',
        'totalFail'    => 'TotalFail',
        'totalSuccess' => 'TotalSuccess',
        'totalUnknown' => 'TotalUnknown',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayStatistic) {
            $res['DayStatistic'] = [];
            if (null !== $this->dayStatistic && \is_array($this->dayStatistic)) {
                $n = 0;
                foreach ($this->dayStatistic as $item) {
                    $res['DayStatistic'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->totalFail) {
            $res['TotalFail'] = $this->totalFail;
        }
        if (null !== $this->totalSuccess) {
            $res['TotalSuccess'] = $this->totalSuccess;
        }
        if (null !== $this->totalUnknown) {
            $res['TotalUnknown'] = $this->totalUnknown;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DayStatistic'])) {
            if (!empty($map['DayStatistic'])) {
                $model->dayStatistic = [];
                $n                   = 0;
                foreach ($map['DayStatistic'] as $item) {
                    $model->dayStatistic[$n++] = null !== $item ? dayStatistic::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TotalFail'])) {
            $model->totalFail = $map['TotalFail'];
        }
        if (isset($map['TotalSuccess'])) {
            $model->totalSuccess = $map['TotalSuccess'];
        }
        if (isset($map['TotalUnknown'])) {
            $model->totalUnknown = $map['TotalUnknown'];
        }

        return $model;
    }
}
