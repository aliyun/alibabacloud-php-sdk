<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstancePerformanceRestrictHistoryResponseBody\performanceRestrictHistories\performanceRestrictHistory;

use AlibabaCloud\Tea\Model;

class intervals extends Model
{
    /**
     * @var string[]
     */
    public $interval;
    protected $_name = [
        'interval' => 'Interval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return intervals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interval'])) {
            if (!empty($map['Interval'])) {
                $model->interval = $map['Interval'];
            }
        }

        return $model;
    }
}
