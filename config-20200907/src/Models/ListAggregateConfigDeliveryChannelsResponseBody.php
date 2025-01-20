<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateConfigDeliveryChannelsResponseBody\deliveryChannels;

class ListAggregateConfigDeliveryChannelsResponseBody extends Model
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
        if (\is_array($this->deliveryChannels)) {
            Model::validateArray($this->deliveryChannels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryChannels) {
            if (\is_array($this->deliveryChannels)) {
                $res['DeliveryChannels'] = [];
                $n1                      = 0;
                foreach ($this->deliveryChannels as $item1) {
                    $res['DeliveryChannels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryChannels'])) {
            if (!empty($map['DeliveryChannels'])) {
                $model->deliveryChannels = [];
                $n1                      = 0;
                foreach ($map['DeliveryChannels'] as $item1) {
                    $model->deliveryChannels[$n1++] = deliveryChannels::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
