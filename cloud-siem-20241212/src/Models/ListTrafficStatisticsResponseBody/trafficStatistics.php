<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTrafficStatisticsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTrafficStatisticsResponseBody\trafficStatistics\trafficStatisticData;

class trafficStatistics extends Model
{
    /**
     * @var trafficStatisticData[]
     */
    public $trafficStatisticData;

    /**
     * @var string
     */
    public $trafficStatisticTarget;
    protected $_name = [
        'trafficStatisticData' => 'TrafficStatisticData',
        'trafficStatisticTarget' => 'TrafficStatisticTarget',
    ];

    public function validate()
    {
        if (\is_array($this->trafficStatisticData)) {
            Model::validateArray($this->trafficStatisticData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trafficStatisticData) {
            if (\is_array($this->trafficStatisticData)) {
                $res['TrafficStatisticData'] = [];
                $n1 = 0;
                foreach ($this->trafficStatisticData as $item1) {
                    $res['TrafficStatisticData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trafficStatisticTarget) {
            $res['TrafficStatisticTarget'] = $this->trafficStatisticTarget;
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
        if (isset($map['TrafficStatisticData'])) {
            if (!empty($map['TrafficStatisticData'])) {
                $model->trafficStatisticData = [];
                $n1 = 0;
                foreach ($map['TrafficStatisticData'] as $item1) {
                    $model->trafficStatisticData[$n1] = trafficStatisticData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TrafficStatisticTarget'])) {
            $model->trafficStatisticTarget = $map['TrafficStatisticTarget'];
        }

        return $model;
    }
}
