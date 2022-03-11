<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyConsumerGroupPasswordRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $consumerGroupID;

    /**
     * @var string
     */
    public $consumerGroupName;

    /**
     * @var string
     */
    public $consumerGroupPassword;

    /**
     * @var string
     */
    public $consumerGroupUserName;

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
    public $consumerGroupNewPassword;
    protected $_name = [
        'accountId'                => 'AccountId',
        'consumerGroupID'          => 'ConsumerGroupID',
        'consumerGroupName'        => 'ConsumerGroupName',
        'consumerGroupPassword'    => 'ConsumerGroupPassword',
        'consumerGroupUserName'    => 'ConsumerGroupUserName',
        'ownerId'                  => 'OwnerId',
        'regionId'                 => 'RegionId',
        'subscriptionInstanceId'   => 'SubscriptionInstanceId',
        'consumerGroupNewPassword' => 'consumerGroupNewPassword',
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
        if (null !== $this->consumerGroupID) {
            $res['ConsumerGroupID'] = $this->consumerGroupID;
        }
        if (null !== $this->consumerGroupName) {
            $res['ConsumerGroupName'] = $this->consumerGroupName;
        }
        if (null !== $this->consumerGroupPassword) {
            $res['ConsumerGroupPassword'] = $this->consumerGroupPassword;
        }
        if (null !== $this->consumerGroupUserName) {
            $res['ConsumerGroupUserName'] = $this->consumerGroupUserName;
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
        if (null !== $this->consumerGroupNewPassword) {
            $res['consumerGroupNewPassword'] = $this->consumerGroupNewPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyConsumerGroupPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ConsumerGroupID'])) {
            $model->consumerGroupID = $map['ConsumerGroupID'];
        }
        if (isset($map['ConsumerGroupName'])) {
            $model->consumerGroupName = $map['ConsumerGroupName'];
        }
        if (isset($map['ConsumerGroupPassword'])) {
            $model->consumerGroupPassword = $map['ConsumerGroupPassword'];
        }
        if (isset($map['ConsumerGroupUserName'])) {
            $model->consumerGroupUserName = $map['ConsumerGroupUserName'];
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
        if (isset($map['consumerGroupNewPassword'])) {
            $model->consumerGroupNewPassword = $map['consumerGroupNewPassword'];
        }

        return $model;
    }
}
