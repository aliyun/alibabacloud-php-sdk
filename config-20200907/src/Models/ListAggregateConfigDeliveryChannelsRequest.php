<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListAggregateConfigDeliveryChannelsRequest extends Model
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
     * @description The IDs of the delivery channels. Separate multiple IDs with commas (,).
     *
     * @example cdc-d9106457e0d900b1****
     *
     * @var string
     */
    public $deliveryChannelIds;
    protected $_name = [
        'aggregatorId'       => 'AggregatorId',
        'deliveryChannelIds' => 'DeliveryChannelIds',
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
        if (null !== $this->deliveryChannelIds) {
            $res['DeliveryChannelIds'] = $this->deliveryChannelIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAggregateConfigDeliveryChannelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['DeliveryChannelIds'])) {
            $model->deliveryChannelIds = $map['DeliveryChannelIds'];
        }

        return $model;
    }
}
