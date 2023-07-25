<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteAggregateConfigDeliveryChannelRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * @example ca-23c6626622af0041****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the delivery channel.
     *
     * For more information about how to obtain the ID of a delivery channel, see [ListAggregateConfigDeliveryChannels](~~429842~~).
     * @example cdc-38c3013b46c9002c****
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
     * @return DeleteAggregateConfigDeliveryChannelRequest
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
