<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\GetInstanceResponseBody\tags;

class GetInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var float
     */
    public $elasticVCUUpperLimit;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceSpecification;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var bool
     */
    public $isMultiAZ;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string[]
     */
    public $networkSourceACL;

    /**
     * @var string[]
     */
    public $networkTypeACL;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var int
     */
    public $policyVersion;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $SPInstanceId;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var int
     */
    public $tableQuota;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $VCUQuota;
    protected $_name = [
        'aliasName' => 'AliasName',
        'createTime' => 'CreateTime',
        'elasticVCUUpperLimit' => 'ElasticVCUUpperLimit',
        'instanceDescription' => 'InstanceDescription',
        'instanceName' => 'InstanceName',
        'instanceSpecification' => 'InstanceSpecification',
        'instanceStatus' => 'InstanceStatus',
        'isMultiAZ' => 'IsMultiAZ',
        'network' => 'Network',
        'networkSourceACL' => 'NetworkSourceACL',
        'networkTypeACL' => 'NetworkTypeACL',
        'paymentType' => 'PaymentType',
        'policy' => 'Policy',
        'policyVersion' => 'PolicyVersion',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'SPInstanceId' => 'SPInstanceId',
        'storageType' => 'StorageType',
        'tableQuota' => 'TableQuota',
        'tags' => 'Tags',
        'userId' => 'UserId',
        'VCUQuota' => 'VCUQuota',
    ];

    public function validate()
    {
        if (\is_array($this->networkSourceACL)) {
            Model::validateArray($this->networkSourceACL);
        }
        if (\is_array($this->networkTypeACL)) {
            Model::validateArray($this->networkTypeACL);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->networkSourceACL)) {
                $res['NetworkSourceACL'] = [];
                $n1 = 0;
                foreach ($this->networkSourceACL as $item1) {
                    $res['NetworkSourceACL'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->networkTypeACL) {
            if (\is_array($this->networkTypeACL)) {
                $res['NetworkTypeACL'] = [];
                $n1 = 0;
                foreach ($this->networkTypeACL as $item1) {
                    $res['NetworkTypeACL'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->networkSourceACL = [];
                $n1 = 0;
                foreach ($map['NetworkSourceACL'] as $item1) {
                    $model->networkSourceACL[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NetworkTypeACL'])) {
            if (!empty($map['NetworkTypeACL'])) {
                $model->networkTypeACL = [];
                $n1 = 0;
                foreach ($map['NetworkTypeACL'] as $item1) {
                    $model->networkTypeACL[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
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
