<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\SDK\Config\V20190108\Models\DescribeDeliveryChannelsResponse\deliveryChannels;
use AlibabaCloud\Tea\Model;

class DescribeDeliveryChannelsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deliveryChannels[]
     */
    public $deliveryChannels;
    protected $_name = [
        'requestId'        => 'RequestId',
        'deliveryChannels' => 'DeliveryChannels',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('deliveryChannels', $this->deliveryChannels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deliveryChannels) {
            $res['DeliveryChannels'] = [];
            if (null !== $this->deliveryChannels && \is_array($this->deliveryChannels)) {
                $n = 0;
                foreach ($this->deliveryChannels as $item) {
                    $res['DeliveryChannels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeliveryChannelsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeliveryChannels'])) {
            if (!empty($map['DeliveryChannels'])) {
                $model->deliveryChannels = [];
                $n                       = 0;
                foreach ($map['DeliveryChannels'] as $item) {
                    $model->deliveryChannels[$n++] = null !== $item ? deliveryChannels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
