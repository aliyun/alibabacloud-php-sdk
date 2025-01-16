<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\SDK\Tablestore\V20201209\Models\GetInstanceResponseBody\tags;
use AlibabaCloud\Tea\Model;

class GetInstanceResponseBody extends Model
{
    /**
     * @description The instance alias.
     *
     * @example instance-test
     *
     * @var string
     */
    public $aliasName;

    /**
     * @description The time when the instance was created.
     *
     * @example 2019-12-23T07:24:33Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var float
     */
    public $elasticVCUUpperLimit;

    /**
     * @description The description of the instance.
     *
     * @example Description of the test instance.
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description The name of the instance.
     *
     * @example instance-test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The type of the instance.
     *
     *   SSD: high-performance instance
     *   HYBRID: capacity instance
     *
     * @example SSD
     *
     * @var string
     */
    public $instanceSpecification;

    /**
     * @description The status of the instance.
     *
     *   normal: The instance works as expected.
     *   forbidden: The instance is disabled.
     *   Deleting: The instance is being deleted.
     *
     * @example normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @description Indicates whether zone-redundant storage (ZRS) is enabled for the instance.
     *
     *   true: ZRS is enabled for the instance.
     *   false: Locally redundant storage (LRS) is enabled for the instance.
     *
     * @var bool
     */
    public $isMultiAZ;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   VPC: The instance can be accessed only over the bound virtual private clouds (VPCs).
     *   VPC_CONSOLE: The instance can be accessed from the Tablestore console or over the bound VPCs.
     *   NORMAL: The instance can be accessed from networks of the custom types.
     *
     * @example VPC
     *
     * @var string
     */
    public $network;

    /**
     * @description The sources of the network from which access is allowed. Valid value:
     *
     * TRUST_PROXY: console
     * @var string[]
     */
    public $networkSourceACL;

    /**
     * @description The types of the network from which access is allowed. Valid values:
     *
     *   CLASSIC: the classic network
     *   INTERNET: the Internet
     *   VPC: VPCs
     *
     * @var string[]
     */
    public $networkTypeACL;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * @example Subscription
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The instance policy.
     *
     * @example {
     * "Action": [
     * "ots:*"
     * "Resource": [
     * "acs:ots:*:13791xxxxxxxxxxx:instance/myinstance*"
     * "Principal": [
     * "*"
     * }
     * @var string
     */
    public $policy;

    /**
     * @description The version of the instance policy.
     *
     * @example 1
     *
     * @var int
     */
    public $policyVersion;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID, which can be used to troubleshoot issues.
     *
     * @example 757E172A-F94B-5E78-8A23-D9068E42F2E9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-acfmxh4em5jncda
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the instance.
     *
     * @example ots_standard_public_cn-9lb34u7u5001
     *
     * @var string
     */
    public $SPInstanceId;

    /**
     * @description The storage type.
     *
     *   SSD: high-performance
     *   HYBRID: capacity
     *
     * @example HYBRID
     *
     * @var string
     */
    public $storageType;

    /**
     * @description The total number of tables in the instance.
     *
     * @example 100
     *
     * @var int
     */
    public $tableQuota;

    /**
     * @description The tags of the instance.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The user ID.
     *
     * @example 16542312566
     *
     * @var string
     */
    public $userId;

    /**
     * @description The VCU quota.
     *
     * @example 20
     *
     * @var int
     */
    public $VCUQuota;
    protected $_name = [
        'aliasName'             => 'AliasName',
        'createTime'            => 'CreateTime',
        'elasticVCUUpperLimit'  => 'ElasticVCUUpperLimit',
        'instanceDescription'   => 'InstanceDescription',
        'instanceName'          => 'InstanceName',
        'instanceSpecification' => 'InstanceSpecification',
        'instanceStatus'        => 'InstanceStatus',
        'isMultiAZ'             => 'IsMultiAZ',
        'network'               => 'Network',
        'networkSourceACL'      => 'NetworkSourceACL',
        'networkTypeACL'        => 'NetworkTypeACL',
        'paymentType'           => 'PaymentType',
        'policy'                => 'Policy',
        'policyVersion'         => 'PolicyVersion',
        'regionId'              => 'RegionId',
        'requestId'             => 'RequestId',
        'resourceGroupId'       => 'ResourceGroupId',
        'SPInstanceId'          => 'SPInstanceId',
        'storageType'           => 'StorageType',
        'tableQuota'            => 'TableQuota',
        'tags'                  => 'Tags',
        'userId'                => 'UserId',
        'VCUQuota'              => 'VCUQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->elasticVCUUpperLimit) {
            $res['ElasticVCUUpperLimit'] = $this->elasticVCUUpperLimit;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceSpecification) {
            $res['InstanceSpecification'] = $this->instanceSpecification;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->isMultiAZ) {
            $res['IsMultiAZ'] = $this->isMultiAZ;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->networkSourceACL) {
            $res['NetworkSourceACL'] = $this->networkSourceACL;
        }
        if (null !== $this->networkTypeACL) {
            $res['NetworkTypeACL'] = $this->networkTypeACL;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->policyVersion) {
            $res['PolicyVersion'] = $this->policyVersion;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->SPInstanceId) {
            $res['SPInstanceId'] = $this->SPInstanceId;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->tableQuota) {
            $res['TableQuota'] = $this->tableQuota;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->VCUQuota) {
            $res['VCUQuota'] = $this->VCUQuota;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ElasticVCUUpperLimit'])) {
            $model->elasticVCUUpperLimit = $map['ElasticVCUUpperLimit'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceSpecification'])) {
            $model->instanceSpecification = $map['InstanceSpecification'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['IsMultiAZ'])) {
            $model->isMultiAZ = $map['IsMultiAZ'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['NetworkSourceACL'])) {
            if (!empty($map['NetworkSourceACL'])) {
                $model->networkSourceACL = $map['NetworkSourceACL'];
            }
        }
        if (isset($map['NetworkTypeACL'])) {
            if (!empty($map['NetworkTypeACL'])) {
                $model->networkTypeACL = $map['NetworkTypeACL'];
            }
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['PolicyVersion'])) {
            $model->policyVersion = $map['PolicyVersion'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SPInstanceId'])) {
            $model->SPInstanceId = $map['SPInstanceId'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['TableQuota'])) {
            $model->tableQuota = $map['TableQuota'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VCUQuota'])) {
            $model->VCUQuota = $map['VCUQuota'];
        }

        return $model;
    }
}
