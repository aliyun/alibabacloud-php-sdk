<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRealtimeDeliveryAccResponse\realTimeDeliveryAccData;
use AlibabaCloud\Tea\Model;

class DescribeLiveRealtimeDeliveryAccResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var realTimeDeliveryAccData
     */
    public $realTimeDeliveryAccData;
    protected $_name = [
        'requestId'               => 'RequestId',
        'realTimeDeliveryAccData' => 'RealTimeDeliveryAccData',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('realTimeDeliveryAccData', $this->realTimeDeliveryAccData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->realTimeDeliveryAccData) {
            $res['RealTimeDeliveryAccData'] = null !== $this->realTimeDeliveryAccData ? $this->realTimeDeliveryAccData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRealtimeDeliveryAccResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RealTimeDeliveryAccData'])) {
            $model->realTimeDeliveryAccData = realTimeDeliveryAccData::fromMap($map['RealTimeDeliveryAccData']);
        }

        return $model;
    }
}
