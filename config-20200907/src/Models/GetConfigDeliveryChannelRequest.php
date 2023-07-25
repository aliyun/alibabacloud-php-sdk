<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetConfigDeliveryChannelRequest extends Model
{
    /**
     * @description The ID of the delivery channel.
     *
     * For more information about how to obtain the ID of a delivery channel, see [DescribeDeliveryChannels](~~429841~~).
     * @example cdc-d9106457e0d900b1****
     *
     * @var string
     */
    public $deliveryChannelId;
    protected $_name = [
        'deliveryChannelId' => 'DeliveryChannelId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetConfigDeliveryChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryChannelId'])) {
            $model->deliveryChannelId = $map['DeliveryChannelId'];
        }

        return $model;
    }
}
