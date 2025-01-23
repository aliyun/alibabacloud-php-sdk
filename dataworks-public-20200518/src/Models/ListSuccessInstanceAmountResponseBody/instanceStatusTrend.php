<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountResponseBody\instanceStatusTrend\avgTrend;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountResponseBody\instanceStatusTrend\todayTrend;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListSuccessInstanceAmountResponseBody\instanceStatusTrend\yesterdayTrend;

class instanceStatusTrend extends Model
{
    /**
     * @var avgTrend[]
     */
    public $avgTrend;
    /**
     * @var todayTrend[]
     */
    public $todayTrend;
    /**
     * @var yesterdayTrend[]
     */
    public $yesterdayTrend;
    protected $_name = [
        'avgTrend'       => 'AvgTrend',
        'todayTrend'     => 'TodayTrend',
        'yesterdayTrend' => 'YesterdayTrend',
    ];

    public function validate()
    {
        if (\is_array($this->avgTrend)) {
            Model::validateArray($this->avgTrend);
        }
        if (\is_array($this->todayTrend)) {
            Model::validateArray($this->todayTrend);
        }
        if (\is_array($this->yesterdayTrend)) {
            Model::validateArray($this->yesterdayTrend);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgTrend) {
            if (\is_array($this->avgTrend)) {
                $res['AvgTrend'] = [];
                $n1              = 0;
                foreach ($this->avgTrend as $item1) {
                    $res['AvgTrend'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->todayTrend) {
            if (\is_array($this->todayTrend)) {
                $res['TodayTrend'] = [];
                $n1                = 0;
                foreach ($this->todayTrend as $item1) {
                    $res['TodayTrend'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->yesterdayTrend) {
            if (\is_array($this->yesterdayTrend)) {
                $res['YesterdayTrend'] = [];
                $n1                    = 0;
                foreach ($this->yesterdayTrend as $item1) {
                    $res['YesterdayTrend'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['AvgTrend'])) {
            if (!empty($map['AvgTrend'])) {
                $model->avgTrend = [];
                $n1              = 0;
                foreach ($map['AvgTrend'] as $item1) {
                    $model->avgTrend[$n1++] = avgTrend::fromMap($item1);
                }
            }
        }

        if (isset($map['TodayTrend'])) {
            if (!empty($map['TodayTrend'])) {
                $model->todayTrend = [];
                $n1                = 0;
                foreach ($map['TodayTrend'] as $item1) {
                    $model->todayTrend[$n1++] = todayTrend::fromMap($item1);
                }
            }
        }

        if (isset($map['YesterdayTrend'])) {
            if (!empty($map['YesterdayTrend'])) {
                $model->yesterdayTrend = [];
                $n1                    = 0;
                foreach ($map['YesterdayTrend'] as $item1) {
                    $model->yesterdayTrend[$n1++] = yesterdayTrend::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
