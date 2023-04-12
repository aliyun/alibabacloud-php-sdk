<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteConfigDeliveryChannelRequest extends Model
{
    /**
     * @description The ID of the delivery channel.
     *
     * For information about how to obtain the ID of a delivery channel, see [DescribeDeliveryChannels](~~429841~~).
     * @example cdc-38c32e87cadb002c****
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
     * @return DeleteConfigDeliveryChannelRequest
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
