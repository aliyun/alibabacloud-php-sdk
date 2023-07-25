<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class DeleteAggregateConfigDeliveryChannelResponseBody extends Model
{
    /**
     * @description The ID of the delivery channel.
     *
     * @example cdc-38c3013b46c9002c****
     *
     * @var string
     */
    public $deliveryChannelId;

    /**
     * @description The request ID.
     *
     * @example FCC2F05C-F672-5665-8102-0020DF66B9B9
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
     * @return DeleteAggregateConfigDeliveryChannelResponseBody
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
