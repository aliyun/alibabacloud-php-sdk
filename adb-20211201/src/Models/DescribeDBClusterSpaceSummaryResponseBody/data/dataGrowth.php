<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterSpaceSummaryResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataGrowth extends Model
{
    /**
     * @var int
     */
    public $dayGrowth;

    /**
     * @var int
     */
    public $weekGrowth;
    protected $_name = [
        'dayGrowth' => 'DayGrowth',
        'weekGrowth' => 'WeekGrowth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
