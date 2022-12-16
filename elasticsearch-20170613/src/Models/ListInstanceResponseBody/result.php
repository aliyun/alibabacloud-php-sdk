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
     * @example false
     *
     * @var bool
     */
    public $advancedDedicateMaster;

    /**
     * @var clientNodeConfiguration
     */
    public $clientNodeConfiguration;

    /**
     * @example 2018-07-13T03:58:07.253Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example false
     *
     * @var bool
     */
    public $dedicateMaster;

    /**
     * @example es-cn-abc
     *
     * @var string
     */
    public $description;

    /**
     * @var elasticDataNodeConfiguration
     */
    public $elasticDataNodeConfiguration;

    /**
     * @example 6.7_with_X-Pack
     *
     * @var string
     */
    public $esVersion;

    /**
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @example es-cn-v641a0ta3000g****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var string
     */
    public $isNewDeployment;

    /**
     * @var kibanaConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @var masterConfiguration
     */
    public $masterConfiguration;

    /**
     * @var networkConfig
     */
    public $networkConfig;

    /**
     * @example 2
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @var nodeSpec
     */
    public $nodeSpec;

    /**
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example active
     *
     * @var string
     */
    public $postpaidServiceStatus;

    /**
     * @example rg-aekzvowej3i****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example true
     *
     * @var bool
     */
    public $serviceVpc;

    /**
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
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
        'masterConfiguration'          => 'masterConfiguration',
        'networkConfig'                => 'networkConfig',
        'nodeAmount'                   => 'nodeAmount',
        'nodeSpec'                     => 'nodeSpec',
        'paymentType'                  => 'paymentType',
        'postpaidServiceStatus'        => 'postpaidServiceStatus',
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
