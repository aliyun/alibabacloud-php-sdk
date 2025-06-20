<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelStatisticsResponseBody\deliveryChannelStatistics;

class GetDeliveryChannelStatisticsResponseBody extends Model
{
    /**
     * @var deliveryChannelStatistics
     */
    public $deliveryChannelStatistics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliveryChannelStatistics' => 'DeliveryChannelStatistics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->deliveryChannelStatistics) {
            $this->deliveryChannelStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryChannelStatistics) {
            $res['DeliveryChannelStatistics'] = null !== $this->deliveryChannelStatistics ? $this->deliveryChannelStatistics->toArray($noStream) : $this->deliveryChannelStatistics;
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
        if (isset($map['DeliveryChannelStatistics'])) {
            $model->deliveryChannelStatistics = deliveryChannelStatistics::fromMap($map['DeliveryChannelStatistics']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
