<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetConfigDeliveryChannelResponseBody\deliveryChannel;

class GetConfigDeliveryChannelResponseBody extends Model
{
    /**
     * @var deliveryChannel
     */
    public $deliveryChannel;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliveryChannel' => 'DeliveryChannel',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->deliveryChannel) {
            $this->deliveryChannel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryChannel) {
            $res['DeliveryChannel'] = null !== $this->deliveryChannel ? $this->deliveryChannel->toArray($noStream) : $this->deliveryChannel;
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
        if (isset($map['DeliveryChannel'])) {
            $model->deliveryChannel = deliveryChannel::fromMap($map['DeliveryChannel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
