<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeDeliveryAccResponseBody\realTimeDeliveryAccData;
use AlibabaCloud\Tea\Model;

class DescribeLiveRealtimeDeliveryAccResponseBody extends Model
{
    /**
     * @description The information about real-time log deliveries.
     *
     * @var realTimeDeliveryAccData
     */
    public $realTimeDeliveryAccData;

    /**
     * @description The request ID.
     *
     * @example 684306D2-2511-4977-991D-CE97E91FD7C0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'realTimeDeliveryAccData' => 'RealTimeDeliveryAccData',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->realTimeDeliveryAccData) {
            $res['RealTimeDeliveryAccData'] = null !== $this->realTimeDeliveryAccData ? $this->realTimeDeliveryAccData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRealtimeDeliveryAccResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RealTimeDeliveryAccData'])) {
            $model->realTimeDeliveryAccData = realTimeDeliveryAccData::fromMap($map['RealTimeDeliveryAccData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
