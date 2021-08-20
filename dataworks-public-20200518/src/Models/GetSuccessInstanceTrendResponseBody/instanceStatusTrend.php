<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendResponseBody\instanceStatusTrend\avgTrend;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendResponseBody\instanceStatusTrend\todayTrend;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetSuccessInstanceTrendResponseBody\instanceStatusTrend\yesterdayTrend;
use AlibabaCloud\Tea\Model;

class instanceStatusTrend extends Model
{
    /**
     * @var todayTrend[]
     */
    public $todayTrend;

    /**
     * @var yesterdayTrend[]
     */
    public $yesterdayTrend;

    /**
     * @var avgTrend[]
     */
    public $avgTrend;
    protected $_name = [
        'todayTrend'     => 'TodayTrend',
        'yesterdayTrend' => 'YesterdayTrend',
        'avgTrend'       => 'AvgTrend',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->todayTrend) {
            $res['TodayTrend'] = [];
            if (null !== $this->todayTrend && \is_array($this->todayTrend)) {
                $n = 0;
                foreach ($this->todayTrend as $item) {
                    $res['TodayTrend'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->yesterdayTrend) {
            $res['YesterdayTrend'] = [];
            if (null !== $this->yesterdayTrend && \is_array($this->yesterdayTrend)) {
                $n = 0;
                foreach ($this->yesterdayTrend as $item) {
                    $res['YesterdayTrend'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->avgTrend) {
            $res['AvgTrend'] = [];
            if (null !== $this->avgTrend && \is_array($this->avgTrend)) {
                $n = 0;
                foreach ($this->avgTrend as $item) {
                    $res['AvgTrend'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStatusTrend
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TodayTrend'])) {
            if (!empty($map['TodayTrend'])) {
                $model->todayTrend = [];
                $n                 = 0;
                foreach ($map['TodayTrend'] as $item) {
                    $model->todayTrend[$n++] = null !== $item ? todayTrend::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['YesterdayTrend'])) {
            if (!empty($map['YesterdayTrend'])) {
                $model->yesterdayTrend = [];
                $n                     = 0;
                foreach ($map['YesterdayTrend'] as $item) {
                    $model->yesterdayTrend[$n++] = null !== $item ? yesterdayTrend::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AvgTrend'])) {
            if (!empty($map['AvgTrend'])) {
                $model->avgTrend = [];
                $n               = 0;
                foreach ($map['AvgTrend'] as $item) {
                    $model->avgTrend[$n++] = null !== $item ? avgTrend::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
