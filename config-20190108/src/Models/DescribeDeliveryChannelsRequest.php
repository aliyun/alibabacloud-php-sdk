<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeliveryChannelsRequest extends Model
{
    /**
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
     * @return DescribeDeliveryChannelsRequest
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
