<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models\ListCardDayUsagesResponseBody\cards\usageDataMonths;

use AlibabaCloud\Tea\Model;

class cardDayUsages extends Model
{
    /**
     * @example 20220701
     *
     * @var string
     */
    public $day;

    /**
     * @example 40
     *
     * @var string
     */
    public $usageData;
    protected $_name = [
        'day'       => 'Day',
        'usageData' => 'UsageData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->usageData) {
            $res['UsageData'] = $this->usageData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardDayUsages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['UsageData'])) {
            $model->usageData = $map['UsageData'];
        }

        return $model;
    }
}
