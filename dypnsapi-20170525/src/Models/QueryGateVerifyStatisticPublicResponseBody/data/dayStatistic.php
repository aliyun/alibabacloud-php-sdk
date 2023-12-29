<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\QueryGateVerifyStatisticPublicResponseBody\data;

use AlibabaCloud\Tea\Model;

class dayStatistic extends Model
{
    /**
     * @description The date. This field is accurate to the day. The value of this field is in the YYYYMMDD format. Example: 20220103.
     *
     * @example 20220103
     *
     * @var string
     */
    public $statisticDateStr;

    /**
     * @description The failed calls on the day.
     *
     * @example 20
     *
     * @var int
     */
    public $totalFail;

    /**
     * @description The successful calls on the day.
     *
     * @example 0
     *
     * @var int
     */
    public $totalSuccess;

    /**
     * @description The unknown calls on the day.
     *
     * @example 0
     *
     * @var int
     */
    public $totalUnknown;
    protected $_name = [
        'statisticDateStr' => 'StatisticDateStr',
        'totalFail'        => 'TotalFail',
        'totalSuccess'     => 'TotalSuccess',
        'totalUnknown'     => 'TotalUnknown',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statisticDateStr) {
            $res['StatisticDateStr'] = $this->statisticDateStr;
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
     * @return dayStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatisticDateStr'])) {
            $model->statisticDateStr = $map['StatisticDateStr'];
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
