<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponseBody\reatTimeDeliveryAccData;
use AlibabaCloud\Tea\Model;

class DescribeRealtimeDeliveryAccResponseBody extends Model
{
    /**
     * @description The information about real-time log delivery.
     *
     * @var reatTimeDeliveryAccData
     */
    public $reatTimeDeliveryAccData;

    /**
     * @description The ID of the request.
     *
     * @example 684306D2-2511-4977-991D-CE97E91FD7C0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reatTimeDeliveryAccData' => 'ReatTimeDeliveryAccData',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reatTimeDeliveryAccData) {
            $res['ReatTimeDeliveryAccData'] = null !== $this->reatTimeDeliveryAccData ? $this->reatTimeDeliveryAccData->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRealtimeDeliveryAccResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReatTimeDeliveryAccData'])) {
            $model->reatTimeDeliveryAccData = reatTimeDeliveryAccData::fromMap($map['ReatTimeDeliveryAccData']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
