<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListTrafficStatisticsResponseBody\trafficStatistics;

class ListTrafficStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var trafficStatistics[]
     */
    public $trafficStatistics;
    protected $_name = [
        'requestId' => 'RequestId',
        'trafficStatistics' => 'TrafficStatistics',
    ];

    public function validate()
    {
        if (\is_array($this->trafficStatistics)) {
            Model::validateArray($this->trafficStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficStatistics) {
            if (\is_array($this->trafficStatistics)) {
                $res['TrafficStatistics'] = [];
                $n1 = 0;
                foreach ($this->trafficStatistics as $item1) {
                    $res['TrafficStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TrafficStatistics'])) {
            if (!empty($map['TrafficStatistics'])) {
                $model->trafficStatistics = [];
                $n1 = 0;
                foreach ($map['TrafficStatistics'] as $item1) {
                    $model->trafficStatistics[$n1] = trafficStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
