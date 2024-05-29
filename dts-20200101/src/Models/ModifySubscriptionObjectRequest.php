<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifySubscriptionObjectRequest extends Model
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
    public $resourceGroupId;

    /**
     * @description The ID of the change tracking instance. You can call the [DescribeSubscriptionInstances](https://help.aliyun.com/document_detail/49442.html) operation to query the instance ID.
     *
     * This parameter is required.
     * @example dtsl8zl9ek6292****
     *
     * @var string
     */
    public $subscriptionInstanceId;

    /**
     * @description The objects from which you want to track data changes. The value is a JSON string and can contain regular expressions. For more information, see [SubscriptionObjects](https://help.aliyun.com/document_detail/141902.html).
     *
     * This parameter is required.
     * @example [{"DBName":"dtstestdata"}]
     *
     * @var string
     */
    public $subscriptionObject;
    protected $_name = [
        'accountId'              => 'AccountId',
        'ownerId'                => 'OwnerId',
        'regionId'               => 'RegionId',
        'resourceGroupId'        => 'ResourceGroupId',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
