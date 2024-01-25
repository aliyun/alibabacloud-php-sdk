<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPopTrafficStatisticsResponseBody\trafficData;
use AlibabaCloud\Tea\Model;

class ListPopTrafficStatisticsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example EFE7EBB2-449D-5BBB-B381-CA7839BC1649
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trafficData) {
            $res['TrafficData'] = [];
            if (null !== $this->trafficData && \is_array($this->trafficData)) {
                $n = 0;
                foreach ($this->trafficData as $item) {
                    $res['TrafficData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPopTrafficStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficData'])) {
            if (!empty($map['TrafficData'])) {
                $model->trafficData = [];
                $n                  = 0;
                foreach ($map['TrafficData'] as $item) {
                    $model->trafficData[$n++] = null !== $item ? trafficData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
