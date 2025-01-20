<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class ListConfigDeliveryChannelsRequest extends Model
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryChannelIds) {
            $res['DeliveryChannelIds'] = $this->deliveryChannelIds;
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
        if (isset($map['DeliveryChannelIds'])) {
            $model->deliveryChannelIds = $map['DeliveryChannelIds'];
        }

        return $model;
    }
}
