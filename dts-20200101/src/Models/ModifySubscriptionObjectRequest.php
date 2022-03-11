<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifySubscriptionObjectRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $subscriptionInstanceId;

    /**
     * @var string
     */
    public $subscriptionObject;
    protected $_name = [
        'accountId'              => 'AccountId',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'subscriptionInstanceId' => 'SubscriptionInstanceId',
        'subscriptionObject'     => 'SubscriptionObject',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subscriptionInstanceId) {
            $res['SubscriptionInstanceId'] = $this->subscriptionInstanceId;
        }
        if (null !== $this->subscriptionObject) {
            $res['SubscriptionObject'] = $this->subscriptionObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySubscriptionObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
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
        if (isset($map['SubscriptionObject'])) {
            $model->subscriptionObject = $map['SubscriptionObject'];
        }

        return $model;
    }
}
