<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteConfigDeliveryChannelResponseBody extends Model
{
    /**
     * @description The ID of the delivery channel.
     *
     * @example cdc-38c32e87cadb002c****
     *
     * @var string
     */
    public $deliveryChannelId;

    /**
     * @description The request ID.
     *
     * @example 35F1DA37-ECB5-54E9-AC22-0D9111A665AA
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
     * @return DeleteConfigDeliveryChannelResponseBody
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
