<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicResponseBody\data\dayStatistic;

class data extends Model
{
    /**
     * @var dayStatistic[]
     */
    public $dayStatistic;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $totalFail;

    /**
     * @var int
     */
    public $totalSuccess;

    /**
     * @var int
     */
    public $totalUnknown;
    protected $_name = [
        'dayStatistic' => 'DayStatistic',
        'total' => 'Total',
        'totalFail' => 'TotalFail',
        'totalSuccess' => 'TotalSuccess',
        'totalUnknown' => 'TotalUnknown',
    ];

    public function validate()
    {
        if (\is_array($this->dayStatistic)) {
            Model::validateArray($this->dayStatistic);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dayStatistic) {
            if (\is_array($this->dayStatistic)) {
                $res['DayStatistic'] = [];
                $n1 = 0;
                foreach ($this->dayStatistic as $item1) {
                    $res['DayStatistic'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DayStatistic'])) {
            if (!empty($map['DayStatistic'])) {
                $model->dayStatistic = [];
                $n1 = 0;
                foreach ($map['DayStatistic'] as $item1) {
                    $model->dayStatistic[$n1] = dayStatistic::fromMap($item1);
                    ++$n1;
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
