<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPopTrafficStatisticsResponseBody\trafficData;

class ListPopTrafficStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var trafficData[]
     */
    public $trafficData;
    protected $_name = [
        'requestId'   => 'RequestId',
        'trafficData' => 'TrafficData',
    ];

    public function validate()
    {
        if (\is_array($this->trafficData)) {
            Model::validateArray($this->trafficData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trafficData) {
            if (\is_array($this->trafficData)) {
                $res['TrafficData'] = [];
                $n1                 = 0;
                foreach ($this->trafficData as $item1) {
                    $res['TrafficData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['TrafficData'])) {
            if (!empty($map['TrafficData'])) {
                $model->trafficData = [];
                $n1                 = 0;
                foreach ($map['TrafficData'] as $item1) {
                    $model->trafficData[$n1++] = trafficData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
