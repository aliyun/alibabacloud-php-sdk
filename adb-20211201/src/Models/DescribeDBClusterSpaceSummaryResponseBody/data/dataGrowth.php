<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataGrowth extends Model
{
    /**
     * @description The data growth within the last day. Unit: bytes.
     *
     * >  Formula: Data growth within the last day = Current data size - Data size one day ago.
     * @example 1048576
     *
     * @var int
     */
    public $dayGrowth;

    /**
     * @description The daily data growth within the last seven days. Unit: bytes.
     *
     * >  Formula: Daily data growth within the last seven days = (Current data size - Data size seven days ago)/7.
     * @example 1048576
     *
     * @var int
     */
    public $weekGrowth;
    protected $_name = [
        'dayGrowth'  => 'DayGrowth',
        'weekGrowth' => 'WeekGrowth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayGrowth) {
            $res['DayGrowth'] = $this->dayGrowth;
        }
        if (null !== $this->weekGrowth) {
            $res['WeekGrowth'] = $this->weekGrowth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataGrowth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DayGrowth'])) {
            $model->dayGrowth = $map['DayGrowth'];
        }
        if (isset($map['WeekGrowth'])) {
            $model->weekGrowth = $map['WeekGrowth'];
        }

        return $model;
    }
}
