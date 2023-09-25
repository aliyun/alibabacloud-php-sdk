<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models;

use AlibabaCloud\Tea\Model;

class ModifyConsumptionTimestampRequest extends Model
{
    /**
     * @var string
     */
    public $consumptionTimestamp;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $subscriptionInstanceId;
    protected $_name = [
        'consumptionTimestamp'   => 'ConsumptionTimestamp',
        'ownerId'                => 'OwnerId',
        'subscriptionInstanceId' => 'SubscriptionInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumptionTimestamp) {
            $res['ConsumptionTimestamp'] = $this->consumptionTimestamp;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->subscriptionInstanceId) {
            $res['SubscriptionInstanceId'] = $this->subscriptionInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyConsumptionTimestampRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumptionTimestamp'])) {
            $model->consumptionTimestamp = $map['ConsumptionTimestamp'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SubscriptionInstanceId'])) {
            $model->subscriptionInstanceId = $map['SubscriptionInstanceId'];
        }

        return $model;
    }
}
