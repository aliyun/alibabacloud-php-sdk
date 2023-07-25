<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListConfigDeliveryChannelsResponseBody\deliveryChannels;
use AlibabaCloud\Tea\Model;

class ListConfigDeliveryChannelsResponseBody extends Model
{
    /**
     * @description The information about the delivery channels.
     *
     * @var deliveryChannels[]
     */
    public $deliveryChannels;

    /**
     * @description The request ID.
     *
     * @example DC300244-FCE3-5061-8214-C27ECB668487
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deliveryChannels' => 'DeliveryChannels',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryChannels) {
            $res['DeliveryChannels'] = [];
            if (null !== $this->deliveryChannels && \is_array($this->deliveryChannels)) {
                $n = 0;
                foreach ($this->deliveryChannels as $item) {
                    $res['DeliveryChannels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConfigDeliveryChannelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryChannels'])) {
            if (!empty($map['DeliveryChannels'])) {
                $model->deliveryChannels = [];
                $n                       = 0;
                foreach ($map['DeliveryChannels'] as $item) {
                    $model->deliveryChannels[$n++] = null !== $item ? deliveryChannels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
