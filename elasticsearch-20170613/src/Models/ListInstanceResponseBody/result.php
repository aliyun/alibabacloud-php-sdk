<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\clientNodeConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\elasticDataNodeConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\kibanaConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\masterConfiguration;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\networkConfig;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\nodeSpec;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListInstanceResponseBody\result\tags;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The billing method of the instance. Valid values:
     *
     *   **prepaid**: subscription
     *   **postpaid**: pay-as-you-go
     *
     * @example false
     *
     * @var bool
     */
    public $advancedDedicateMaster;

    /**
     * @description The instance type of the node. For more information, see [Specifications](~~271718~~).
     *
     * @var clientNodeConfiguration
     */
    public $clientNodeConfiguration;

    /**
     * @description The status of the pay-as-you-go service that is overlaid on a subscription instance. Valid values:
     *
     *   **active**: normal
     *   **closed**: Close
     *   **indebt**: Overdue payments are frozen
     *
     * @example 2018-07-13T03:58:07.253Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @description The edition of the dedicated KMS instance.
     *
     * @example false
     *
     * @var bool
     */
    public $dedicateMaster;

    /**
     * @description The key of the tag.
     *
     * @example es-cn-abc
     *
     * @var string
     */
    public $description;

    /**
     * @description The configuration of Kibana nodes.
     *
     * @var elasticDataNodeConfiguration
     */
    public $elasticDataNodeConfiguration;

    /**
     * @description The value of the tag.
     *
     * @example 6.7_with_X-Pack
     *
     * @var string
     */
    public $esVersion;

    /**
     * @description The configurations of elastic data nodes.
     *
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @description The instance type of the node. For more information, see [Specifications](~~271718~~).
     *
     * @example es-cn-v641a0ta3000g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The configuration of cluster extension parameters.
     *
     * @example true
     *
     * @var string
     */
    public $isNewDeployment;

    /**
     * @description The instance type of the node. For more information, see [Specifications](~~271718~~).
     *
     * @var kibanaConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @var string[]
     */
    public $kibanaIPWhitelist;

    /**
     * @var string[]
     */
    public $kibanaPrivateIPWhitelist;

    /**
     * @description The VPC ID of the cluster.
     *
     * @var masterConfiguration
     */
    public $masterConfiguration;

    /**
     * @description The instance type of the node. For more information, see [Specifications](~~271718~~).
     *
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @description The ID of the resource group.
     *
     * @example 2
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @description The VPC ID of the cluster.
     *
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @description The time when the instance was last updated.
     *
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The tags of the instance. Each tag is a key-value pair.
     *
     * @example active
     *
     * @var string
     */
    public $postpaidServiceStatus;

    /**
     * @var string[]
     */
    public $privateNetworkIpWhiteList;

    /**
     * @var string[]
     */
    public $publicIpWhitelist;

    /**
     * @description The ID of the instance.
     *
     * @example rg-aekzvowej3i****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to deploy the new architecture.
     *
     * @example true
     *
     * @var bool
     */
    public $serviceVpc;

    /**
     * @description The name of the instance.
     *
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of nodes.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Coordination node configuration.
     *
     * @example 2018-07-18T10:10:04.484Z
     *
     * @var string
     */
    public $updatedAt;

    /**
     * @example vpc-bp1uag5jj38c****
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'advancedDedicateMaster'       => 'advancedDedicateMaster',
        'clientNodeConfiguration'      => 'clientNodeConfiguration',
        'createdAt'                    => 'createdAt',
        'dedicateMaster'               => 'dedicateMaster',
        'description'                  => 'description',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'esVersion'                    => 'esVersion',
        'extendConfigs'                => 'extendConfigs',
        'instanceId'                   => 'instanceId',
        'isNewDeployment'              => 'isNewDeployment',
        'kibanaConfiguration'          => 'kibanaConfiguration',
        'kibanaIPWhitelist'            => 'kibanaIPWhitelist',
        'kibanaPrivateIPWhitelist'     => 'kibanaPrivateIPWhitelist',
        'masterConfiguration'          => 'masterConfiguration',
        'networkConfig'                => 'networkConfig',
        'nodeAmount'                   => 'nodeAmount',
        'nodeSpec'                     => 'nodeSpec',
        'paymentType'                  => 'paymentType',
        'postpaidServiceStatus'        => 'postpaidServiceStatus',
        'privateNetworkIpWhiteList'    => 'privateNetworkIpWhiteList',
        'publicIpWhitelist'            => 'publicIpWhitelist',
        'resourceGroupId'              => 'resourceGroupId',
        'serviceVpc'                   => 'serviceVpc',
        'status'                       => 'status',
        'tags'                         => 'tags',
        'updatedAt'                    => 'updatedAt',
        'vpcInstanceId'                => 'vpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedDedicateMaster) {
            $res['advancedDedicateMaster'] = $this->advancedDedicateMaster;
        }
        if (null !== $this->clientNodeConfiguration) {
            $res['clientNodeConfiguration'] = null !== $this->clientNodeConfiguration ? $this->clientNodeConfiguration->toMap() : null;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->dedicateMaster) {
            $res['dedicateMaster'] = $this->dedicateMaster;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->elasticDataNodeConfiguration) {
            $res['elasticDataNodeConfiguration'] = null !== $this->elasticDataNodeConfiguration ? $this->elasticDataNodeConfiguration->toMap() : null;
        }
        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
        }
        if (null !== $this->extendConfigs) {
            $res['extendConfigs'] = $this->extendConfigs;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->isNewDeployment) {
            $res['isNewDeployment'] = $this->isNewDeployment;
        }
        if (null !== $this->kibanaConfiguration) {
            $res['kibanaConfiguration'] = null !== $this->kibanaConfiguration ? $this->kibanaConfiguration->toMap() : null;
        }
        if (null !== $this->kibanaIPWhitelist) {
            $res['kibanaIPWhitelist'] = $this->kibanaIPWhitelist;
        }
        if (null !== $this->kibanaPrivateIPWhitelist) {
            $res['kibanaPrivateIPWhitelist'] = $this->kibanaPrivateIPWhitelist;
        }
        if (null !== $this->masterConfiguration) {
            $res['masterConfiguration'] = null !== $this->masterConfiguration ? $this->masterConfiguration->toMap() : null;
        }
        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toMap() : null;
        }
        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->postpaidServiceStatus) {
            $res['postpaidServiceStatus'] = $this->postpaidServiceStatus;
        }
        if (null !== $this->privateNetworkIpWhiteList) {
            $res['privateNetworkIpWhiteList'] = $this->privateNetworkIpWhiteList;
        }
        if (null !== $this->publicIpWhitelist) {
            $res['publicIpWhitelist'] = $this->publicIpWhitelist;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceVpc) {
            $res['serviceVpc'] = $this->serviceVpc;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->vpcInstanceId) {
            $res['vpcInstanceId'] = $this->vpcInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['advancedDedicateMaster'])) {
            $model->advancedDedicateMaster = $map['advancedDedicateMaster'];
        }
        if (isset($map['clientNodeConfiguration'])) {
            $model->clientNodeConfiguration = clientNodeConfiguration::fromMap($map['clientNodeConfiguration']);
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['dedicateMaster'])) {
            $model->dedicateMaster = $map['dedicateMaster'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['elasticDataNodeConfiguration'])) {
            $model->elasticDataNodeConfiguration = elasticDataNodeConfiguration::fromMap($map['elasticDataNodeConfiguration']);
        }
        if (isset($map['esVersion'])) {
            $model->esVersion = $map['esVersion'];
        }
        if (isset($map['extendConfigs'])) {
            if (!empty($map['extendConfigs'])) {
                $model->extendConfigs = $map['extendConfigs'];
            }
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['isNewDeployment'])) {
            $model->isNewDeployment = $map['isNewDeployment'];
        }
        if (isset($map['kibanaConfiguration'])) {
            $model->kibanaConfiguration = kibanaConfiguration::fromMap($map['kibanaConfiguration']);
        }
        if (isset($map['kibanaIPWhitelist'])) {
            if (!empty($map['kibanaIPWhitelist'])) {
                $model->kibanaIPWhitelist = $map['kibanaIPWhitelist'];
            }
        }
        if (isset($map['kibanaPrivateIPWhitelist'])) {
            if (!empty($map['kibanaPrivateIPWhitelist'])) {
                $model->kibanaPrivateIPWhitelist = $map['kibanaPrivateIPWhitelist'];
            }
        }
        if (isset($map['masterConfiguration'])) {
            $model->masterConfiguration = masterConfiguration::fromMap($map['masterConfiguration']);
        }
        if (isset($map['networkConfig'])) {
            $model->networkConfig = networkConfig::fromMap($map['networkConfig']);
        }
        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }
        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = nodeSpec::fromMap($map['nodeSpec']);
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['postpaidServiceStatus'])) {
            $model->postpaidServiceStatus = $map['postpaidServiceStatus'];
        }
        if (isset($map['privateNetworkIpWhiteList'])) {
            if (!empty($map['privateNetworkIpWhiteList'])) {
                $model->privateNetworkIpWhiteList = $map['privateNetworkIpWhiteList'];
            }
        }
        if (isset($map['publicIpWhitelist'])) {
            if (!empty($map['publicIpWhitelist'])) {
                $model->publicIpWhitelist = $map['publicIpWhitelist'];
            }
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['serviceVpc'])) {
            $model->serviceVpc = $map['serviceVpc'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['vpcInstanceId'])) {
            $model->vpcInstanceId = $map['vpcInstanceId'];
        }

        return $model;
    }
}
