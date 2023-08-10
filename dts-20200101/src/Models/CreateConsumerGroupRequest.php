<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreateConsumerGroupRequest extends Model
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
     * @description The name of the consumer group. The name cannot exceed 128 characters in length. We recommend that you use an informative name for easy identification.
     *
     * @var string
     */
    public $consumerGroupName;

    /**
     * @description The password that corresponds to the username of the consumer group.
     *
     *   A password must contain two or more of the following characters: uppercase letters, lowercase letters, digits, and special characters.
     *   A password must be 8 to 32 characters in length.
     *
     * @example Test123456
     *
     * @var string
     */
    public $consumerGroupPassword;

    /**
     * @description The username of the consumer group.
     *
     *   A username must contain one or more of the following characters: uppercase letters, lowercase letters, digits, and underscores (\_).
     *   A username cannot exceed 16 characters in length.
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
    protected $_name = [
        'accountId'              => 'AccountId',
        'consumerGroupName'      => 'ConsumerGroupName',
        'consumerGroupPassword'  => 'ConsumerGroupPassword',
        'consumerGroupUserName'  => 'ConsumerGroupUserName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsumerGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
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

        return $model;
    }
}
