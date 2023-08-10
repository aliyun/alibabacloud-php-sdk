<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyConsumptionTimestampRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter will be removed in the future.
     *
     * @example 12323344****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The consumption checkpoint. The format is *yyyy-MM-dd*T*HH:mm:ss*Z. The time is displayed in UTC.
     *
     * @example 2019-10-15T17:20:03Z
     *
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
    public $regionId;

    /**
     * @description The ID of the change tracking instance. You can call the **DescribeSubscriptionInstances** operation to query the instance ID.
     *
     * @example dtsg2m10r1x15a****
     *
     * @var string
     */
    public $subscriptionInstanceId;
    protected $_name = [
        'accountId'              => 'AccountId',
        'consumptionTimestamp'   => 'ConsumptionTimestamp',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'subscriptionInstanceId' => 'SubscriptionInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->consumptionTimestamp) {
            $res['ConsumptionTimestamp'] = $this->consumptionTimestamp;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ConsumptionTimestamp'])) {
            $model->consumptionTimestamp = $map['ConsumptionTimestamp'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubscriptionInstanceId'])) {
            $model->subscriptionInstanceId = $map['SubscriptionInstanceId'];
        }

        return $model;
    }
}
