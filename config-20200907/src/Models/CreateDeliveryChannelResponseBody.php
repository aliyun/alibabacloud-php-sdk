<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class CreateDeliveryChannelResponseBody extends Model
{
    /**
     * @description The ID of the delivery channel.
     *
     * @example cdc-8e45ff4e06a3a8****
     *
     * @var string
     */
    public $deliveryChannelId;

    /**
     * @description The request ID.
     *
     * @example A7A0FFF8-0B44-40C6-8BBF-3A185EFDERTHG
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliveryChannelId' => 'DeliveryChannelId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryChannelId) {
            $res['DeliveryChannelId'] = $this->deliveryChannelId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeliveryChannelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryChannelId'])) {
            $model->deliveryChannelId = $map['DeliveryChannelId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
