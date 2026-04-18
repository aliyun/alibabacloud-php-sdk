<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\QueryHistoryActiveUserCountResponseBody;

use AlibabaCloud\Dara\Model;

class activeUserCount extends Model
{
    /**
     * @var int
     */
    public $dailyActiveUserCount;

    /**
     * @var int
     */
    public $monthlyActiveUserCount;
    protected $_name = [
        'dailyActiveUserCount' => 'DailyActiveUserCount',
        'monthlyActiveUserCount' => 'MonthlyActiveUserCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyActiveUserCount) {
            $res['DailyActiveUserCount'] = $this->dailyActiveUserCount;
        }

        if (null !== $this->monthlyActiveUserCount) {
            $res['MonthlyActiveUserCount'] = $this->monthlyActiveUserCount;
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
        if (isset($map['DailyActiveUserCount'])) {
            $model->dailyActiveUserCount = $map['DailyActiveUserCount'];
        }

        if (isset($map['MonthlyActiveUserCount'])) {
            $model->monthlyActiveUserCount = $map['MonthlyActiveUserCount'];
        }

        return $model;
    }
}
