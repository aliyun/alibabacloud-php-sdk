<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigDeliveryChannelResponseBody\deliveryChannel;
use AlibabaCloud\Tea\Model;

class GetAggregateConfigDeliveryChannelResponseBody extends Model
{
    /**
     * @description The information about a delivery channel.
     *
     * @var deliveryChannel
     */
    public $deliveryChannel;

    /**
     * @description The request ID.
     *
     * @example DC300244-FCE3-5061-8214-C27ECB668487
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliveryChannel' => 'DeliveryChannel',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryChannel) {
            $res['DeliveryChannel'] = null !== $this->deliveryChannel ? $this->deliveryChannel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateConfigDeliveryChannelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryChannel'])) {
            $model->deliveryChannel = deliveryChannel::fromMap($map['DeliveryChannel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
