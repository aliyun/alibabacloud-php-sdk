<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListConfigDeliveryChannelsRequest extends Model
{
    /**
     * @description The ID of the delivery channel. Separate multiple IDs with commas (,).
     *
     * @example cdc-d9106457e0d900b1****
     *
     * @var string
     */
    public $deliveryChannelIds;
    protected $_name = [
        'deliveryChannelIds' => 'DeliveryChannelIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryChannelIds) {
            $res['DeliveryChannelIds'] = $this->deliveryChannelIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigDeliveryChannelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryChannelIds'])) {
            $model->deliveryChannelIds = $map['DeliveryChannelIds'];
        }

        return $model;
    }
}
