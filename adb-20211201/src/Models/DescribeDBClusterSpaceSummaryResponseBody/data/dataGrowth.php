<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataGrowth extends Model
{
    /**
     * @example 1048576
     *
     * @var int
     */
    public $dayGrowth;

    /**
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
