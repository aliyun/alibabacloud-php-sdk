<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeDeliveryAccResponseBody\realTimeDeliveryAccData;
use AlibabaCloud\Tea\Model;

class DescribeLiveRealtimeDeliveryAccResponseBody extends Model
{
    /**
     * @var realTimeDeliveryAccData
     */
    public $realTimeDeliveryAccData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'realTimeDeliveryAccData' => 'RealTimeDeliveryAccData',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

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
