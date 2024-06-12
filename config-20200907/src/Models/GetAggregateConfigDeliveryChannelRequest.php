<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetAggregateConfigDeliveryChannelRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-a4e5626622af0079****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the delivery channel.
     *
     * This parameter is required.
     * @example cdc-d9106457e0d900b1****
     *
     * @var string
     */
    public $deliveryChannelId;
    protected $_name = [
        'aggregatorId'      => 'AggregatorId',
        'deliveryChannelId' => 'DeliveryChannelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->deliveryChannelId) {
            $res['DeliveryChannelId'] = $this->deliveryChannelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAggregateConfigDeliveryChannelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['DeliveryChannelId'])) {
            $model->deliveryChannelId = $map['DeliveryChannelId'];
        }

        return $model;
    }
}
