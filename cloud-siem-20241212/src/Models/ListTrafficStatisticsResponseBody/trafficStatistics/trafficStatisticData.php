<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTrafficStatisticsResponseBody\trafficStatistics;

use AlibabaCloud\Dara\Model;

class trafficStatisticData extends Model
{
    /**
     * @var int
     */
    public $trafficStatisticTime;

    /**
     * @var float
     */
    public $trafficStatisticValue;
    protected $_name = [
        'trafficStatisticTime' => 'TrafficStatisticTime',
        'trafficStatisticValue' => 'TrafficStatisticValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trafficStatisticTime) {
            $res['TrafficStatisticTime'] = $this->trafficStatisticTime;
        }

        if (null !== $this->trafficStatisticValue) {
            $res['TrafficStatisticValue'] = $this->trafficStatisticValue;
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
        if (isset($map['TrafficStatisticTime'])) {
            $model->trafficStatisticTime = $map['TrafficStatisticTime'];
        }

        if (isset($map['TrafficStatisticValue'])) {
            $model->trafficStatisticValue = $map['TrafficStatisticValue'];
        }

        return $model;
    }
}
