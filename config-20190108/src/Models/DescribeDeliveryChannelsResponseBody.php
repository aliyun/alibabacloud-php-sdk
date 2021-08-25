<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDeliveryChannelsResponseBody\deliveryChannels;
use AlibabaCloud\Tea\Model;

class DescribeDeliveryChannelsResponseBody extends Model
{
    /**
     * @var deliveryChannels[]
     */
    public $deliveryChannels;

    /**
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
     * @return DescribeDeliveryChannelsResponseBody
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
