<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListDeliveryChannelsResponseBody;

use AlibabaCloud\Dara\Model;

class deliveryChannels extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deliveryChannelDescription;

    /**
     * @var string
     */
    public $deliveryChannelId;

    /**
     * @var string
     */
    public $deliveryChannelName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'deliveryChannelDescription' => 'DeliveryChannelDescription',
        'deliveryChannelId' => 'DeliveryChannelId',
        'deliveryChannelName' => 'DeliveryChannelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deliveryChannelDescription) {
            $res['DeliveryChannelDescription'] = $this->deliveryChannelDescription;
        }

        if (null !== $this->deliveryChannelId) {
            $res['DeliveryChannelId'] = $this->deliveryChannelId;
        }

        if (null !== $this->deliveryChannelName) {
            $res['DeliveryChannelName'] = $this->deliveryChannelName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeliveryChannelDescription'])) {
            $model->deliveryChannelDescription = $map['DeliveryChannelDescription'];
        }

        if (isset($map['DeliveryChannelId'])) {
            $model->deliveryChannelId = $map['DeliveryChannelId'];
        }

        if (isset($map['DeliveryChannelName'])) {
            $model->deliveryChannelName = $map['DeliveryChannelName'];
        }

        return $model;
    }
}
