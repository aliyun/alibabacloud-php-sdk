<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponseBody\reatTimeDeliveryAccData;
use AlibabaCloud\Tea\Model;

class DescribeRealtimeDeliveryAccResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reatTimeDeliveryAccData
     */
    public $reatTimeDeliveryAccData;
    protected $_name = [
        'requestId'               => 'RequestId',
        'reatTimeDeliveryAccData' => 'ReatTimeDeliveryAccData',
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
        if (null !== $this->reatTimeDeliveryAccData) {
            $res['ReatTimeDeliveryAccData'] = null !== $this->reatTimeDeliveryAccData ? $this->reatTimeDeliveryAccData->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReatTimeDeliveryAccData'])) {
            $model->reatTimeDeliveryAccData = reatTimeDeliveryAccData::fromMap($map['ReatTimeDeliveryAccData']);
        }

        return $model;
    }
}
