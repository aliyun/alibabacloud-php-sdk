<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeRealtimeDeliveryAccResponseBody\reatTimeDeliveryAccData;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->reatTimeDeliveryAccData) {
            $this->reatTimeDeliveryAccData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reatTimeDeliveryAccData) {
            $res['ReatTimeDeliveryAccData'] = null !== $this->reatTimeDeliveryAccData ? $this->reatTimeDeliveryAccData->toArray($noStream) : $this->reatTimeDeliveryAccData;
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
        if (isset($map['ReatTimeDeliveryAccData'])) {
            $model->reatTimeDeliveryAccData = reatTimeDeliveryAccData::fromMap($map['ReatTimeDeliveryAccData']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
