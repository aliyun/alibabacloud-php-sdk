<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\GetRealtimeStatsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $todayPvCount;

    /**
     * @var string[]
     */
    public $todayUvCount;

    /**
     * @var string[]
     */
    public $totalPvCount;

    /**
     * @var string[]
     */
    public $totalUvCount;
    protected $_name = [
        'todayPvCount' => 'TodayPvCount',
        'todayUvCount' => 'TodayUvCount',
        'totalPvCount' => 'TotalPvCount',
        'totalUvCount' => 'TotalUvCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->todayPvCount) {
            $res['TodayPvCount'] = $this->todayPvCount;
        }
        if (null !== $this->todayUvCount) {
            $res['TodayUvCount'] = $this->todayUvCount;
        }
        if (null !== $this->totalPvCount) {
            $res['TotalPvCount'] = $this->totalPvCount;
        }
        if (null !== $this->totalUvCount) {
            $res['TotalUvCount'] = $this->totalUvCount;
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
        if (isset($map['TodayPvCount'])) {
            $model->todayPvCount = $map['TodayPvCount'];
        }
        if (isset($map['TodayUvCount'])) {
            $model->todayUvCount = $map['TodayUvCount'];
        }
        if (isset($map['TotalPvCount'])) {
            $model->totalPvCount = $map['TotalPvCount'];
        }
        if (isset($map['TotalUvCount'])) {
            $model->totalUvCount = $map['TotalUvCount'];
        }

        return $model;
    }
}
