<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\GetDeliveryChannelStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class deliveryChannelStatistics extends Model
{
    /**
     * @var string
     */
    public $deliveryChannelId;

    /**
     * @var string
     */
    public $deliveryChannelName;

    /**
     * @var string
     */
    public $latestChangeDeliveryTime;

    /**
     * @var string
     */
    public $latestSnapshotDeliveryTime;
    protected $_name = [
        'deliveryChannelId' => 'DeliveryChannelId',
        'deliveryChannelName' => 'DeliveryChannelName',
        'latestChangeDeliveryTime' => 'LatestChangeDeliveryTime',
        'latestSnapshotDeliveryTime' => 'LatestSnapshotDeliveryTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryChannelId) {
            $res['DeliveryChannelId'] = $this->deliveryChannelId;
        }

        if (null !== $this->deliveryChannelName) {
            $res['DeliveryChannelName'] = $this->deliveryChannelName;
        }

        if (null !== $this->latestChangeDeliveryTime) {
            $res['LatestChangeDeliveryTime'] = $this->latestChangeDeliveryTime;
        }

        if (null !== $this->latestSnapshotDeliveryTime) {
            $res['LatestSnapshotDeliveryTime'] = $this->latestSnapshotDeliveryTime;
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
        if (isset($map['DeliveryChannelId'])) {
            $model->deliveryChannelId = $map['DeliveryChannelId'];
        }

        if (isset($map['DeliveryChannelName'])) {
            $model->deliveryChannelName = $map['DeliveryChannelName'];
        }

        if (isset($map['LatestChangeDeliveryTime'])) {
            $model->latestChangeDeliveryTime = $map['LatestChangeDeliveryTime'];
        }

        if (isset($map['LatestSnapshotDeliveryTime'])) {
            $model->latestSnapshotDeliveryTime = $map['LatestSnapshotDeliveryTime'];
        }

        return $model;
    }
}
