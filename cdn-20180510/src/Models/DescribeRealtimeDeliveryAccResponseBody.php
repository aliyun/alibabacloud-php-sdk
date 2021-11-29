<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponseBody\reatTimeDeliveryAccData;
use AlibabaCloud\Tea\Model;

class DescribeRealtimeDeliveryAccResponseBody extends Model
{
    /**
     * @var reatTimeDeliveryAccData
     */
    public $reatTimeDeliveryAccData;

    /**
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
