<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceRequest\sourceEndpoint;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceRequest\subscriptionDataType;
use AlibabaCloud\SDK\Dts\V20200101\Models\ConfigureSubscriptionInstanceRequest\subscriptionInstance;
use AlibabaCloud\Tea\Model;

class ConfigureSubscriptionInstanceRequest extends Model
{
    /**
     * @var sourceEndpoint
     */
    public $sourceEndpoint;

    /**
     * @var subscriptionDataType
     */
    public $subscriptionDataType;

    /**
     * @var subscriptionInstance
     */
    public $subscriptionInstance;

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
    public $subscriptionInstanceName;

    /**
     * @var string
     */
    public $subscriptionInstanceNetworkType;

    /**
     * @var string
     */
    public $subscriptionObject;
    protected $_name = [
        'sourceEndpoint'                  => 'SourceEndpoint',
        'subscriptionDataType'            => 'SubscriptionDataType',
        'subscriptionInstance'            => 'SubscriptionInstance',
        'accountId'                       => 'AccountId',
        'ownerId'                         => 'OwnerId',
        'regionId'                        => 'RegionId',
        'subscriptionInstanceId'          => 'SubscriptionInstanceId',
        'subscriptionInstanceName'        => 'SubscriptionInstanceName',
        'subscriptionInstanceNetworkType' => 'SubscriptionInstanceNetworkType',
        'subscriptionObject'              => 'SubscriptionObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceEndpoint) {
            $res['SourceEndpoint'] = null !== $this->sourceEndpoint ? $this->sourceEndpoint->toMap() : null;
        }
        if (null !== $this->subscriptionDataType) {
            $res['SubscriptionDataType'] = null !== $this->subscriptionDataType ? $this->subscriptionDataType->toMap() : null;
        }
        if (null !== $this->subscriptionInstance) {
            $res['SubscriptionInstance'] = null !== $this->subscriptionInstance ? $this->subscriptionInstance->toMap() : null;
        }
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
        if (null !== $this->subscriptionInstanceName) {
            $res['SubscriptionInstanceName'] = $this->subscriptionInstanceName;
        }
        if (null !== $this->subscriptionInstanceNetworkType) {
            $res['SubscriptionInstanceNetworkType'] = $this->subscriptionInstanceNetworkType;
        }
        if (null !== $this->subscriptionObject) {
            $res['SubscriptionObject'] = $this->subscriptionObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigureSubscriptionInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceEndpoint'])) {
            $model->sourceEndpoint = sourceEndpoint::fromMap($map['SourceEndpoint']);
        }
        if (isset($map['SubscriptionDataType'])) {
            $model->subscriptionDataType = subscriptionDataType::fromMap($map['SubscriptionDataType']);
        }
        if (isset($map['SubscriptionInstance'])) {
            $model->subscriptionInstance = subscriptionInstance::fromMap($map['SubscriptionInstance']);
        }
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
        if (isset($map['SubscriptionInstanceName'])) {
            $model->subscriptionInstanceName = $map['SubscriptionInstanceName'];
        }
        if (isset($map['SubscriptionInstanceNetworkType'])) {
            $model->subscriptionInstanceNetworkType = $map['SubscriptionInstanceNetworkType'];
        }
        if (isset($map['SubscriptionObject'])) {
            $model->subscriptionObject = $map['SubscriptionObject'];
        }

        return $model;
    }
}
