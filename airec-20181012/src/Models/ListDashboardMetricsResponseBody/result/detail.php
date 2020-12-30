<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardMetricsResponseBody\result;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $val;
    protected $_name = [
        'endTime'   => 'EndTime',
        'startTime' => 'StartTime',
        'val'       => 'Val',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->val) {
            $res['Val'] = $this->val;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Val'])) {
            $model->val = $map['Val'];
        }

        return $model;
    }
}
