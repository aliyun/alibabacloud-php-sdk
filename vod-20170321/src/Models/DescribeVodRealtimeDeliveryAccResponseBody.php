<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRealtimeDeliveryAccResponseBody\realTimeDeliveryAccData;

class DescribeVodRealtimeDeliveryAccResponseBody extends Model
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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->realTimeDeliveryAccData) {
            $this->realTimeDeliveryAccData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->realTimeDeliveryAccData) {
            $res['RealTimeDeliveryAccData'] = null !== $this->realTimeDeliveryAccData ? $this->realTimeDeliveryAccData->toArray($noStream) : $this->realTimeDeliveryAccData;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RealTimeDeliveryAccData'])) {
            $model->realTimeDeliveryAccData = realTimeDeliveryAccData::fromMap($map['RealTimeDeliveryAccData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
