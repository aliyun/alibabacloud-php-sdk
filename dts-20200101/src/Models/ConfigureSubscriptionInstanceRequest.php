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
     * @description The ID of the Alibaba Cloud account. You do not need to specify this parameter because this parameter is discontinued.
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
     * @description The ID of the region in which the change tracking instance resides. For more information, see [List of supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * This parameter is required.
     * @example dtshp8n2ze4r5x****
     *
     * @var string
     */
    public $subscriptionInstanceId;

    /**
     * @description The ID of the change tracking instance. You can call the [DescribeSubscriptionInstances](https://help.aliyun.com/document_detail/49442.html) operation to query the instance ID.
     *
     * @example The name of the change tracking instance.
     *
     * >  We recommend that you specify an informative name for easy identification. You do not need to use a unique name.
     * @var string
     */
    public $subscriptionInstanceName;

    /**
     * @description The network type of the change tracking instance. Set the value to **vpc**. A value of vpc indicates the Virtual Private Cloud (VPC) network type.
     *
     * >
     *   To use the new version of the change tracking feature, you must specify the SubscriptionInstanceNetworkType parameter. You must also specify the **SubscriptionInstance.VPCId** and **SubscriptionInstance.VSwitchID** parameters. If you do not specify the SubscriptionInstanceNetworkType parameter, the previous version of the change tracking feature is used.
     *   The previous version of the change tracking feature supports self-managed MySQL databases, ApsaraDB RDS for MySQL instances, and PolarDB-X 1.0 instances. The new version of the change tracking feature supports self-managed MySQL databases, ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and Oracle databases.
     *
     * @example vpc
     *
     * @var string
     */
    public $subscriptionInstanceNetworkType;

    /**
     * @description The objects for which you want to track data changes. The value is a JSON string and can contain regular expressions. For more information, see [SubscriptionObjects](https://help.aliyun.com/document_detail/141902.html).
     *
     * This parameter is required.
     * @example [{     "DBName": "dtstestdata" }]
     *
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
        'resourceGroupId'                 => 'ResourceGroupId',
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
