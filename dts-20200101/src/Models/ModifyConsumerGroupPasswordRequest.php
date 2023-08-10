<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyConsumerGroupPasswordRequest extends Model
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
     * @description The ID of the consumer group.
     *
     * You can call the [DescribeConsumerGroup](~~122886~~) operation to query the consumer group ID.
     * @example dtswc411cg617p****
     *
     * @var string
     */
    public $consumerGroupID;

    /**
     * @description The name of the consumer group. You can call the [DescribeConsumerGroup](~~122886~~) operation to query the consumer group name.
     *
     * @var string
     */
    public $consumerGroupName;

    /**
     * @description The current password of the consumer group.
     *
     * @example Test123456
     *
     * @var string
     */
    public $consumerGroupPassword;

    /**
     * @description The username of the consumer group. You can call the [DescribeConsumerGroup](~~122886~~) operation to query the username.
     *
     * @example dtstest
     *
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
     * @description The ID of the change tracking instance. You can call the DescribeSubscriptionInstances operation to query the instance ID.
     *
     * @example dtsg2m10r1x15a****
     *
     * @var string
     */
    public $subscriptionInstanceId;

    /**
     * @description The new password of the consumer group.
     *
     *   A password must contain two or more of the following characters: uppercase letters, lowercase letters, digits, and special characters.
     *   A password must be 8 to 32 characters in length.
     *
     * @example Test654321
     *
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
