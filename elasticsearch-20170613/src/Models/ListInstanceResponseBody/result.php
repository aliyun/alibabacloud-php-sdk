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
     * @var bool
     */
    public $advancedDedicateMaster;

    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $dedicateMaster;

    /**
     * @var bool
     */
    public $serviceVpc;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $postpaidServiceStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $esVersion;

    /**
     * @var string
     */
    public $isNewDeployment;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var mixed[][]
     */
    public $extendConfigs;

    /**
     * @var clientNodeConfiguration
     */
    public $clientNodeConfiguration;

    /**
     * @var elasticDataNodeConfiguration
     */
    public $elasticDataNodeConfiguration;

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
     * @var nodeSpec
     */
    public $nodeSpec;
    protected $_name = [
        'advancedDedicateMaster'       => 'advancedDedicateMaster',
        'nodeAmount'                   => 'nodeAmount',
        'createdAt'                    => 'createdAt',
        'status'                       => 'status',
        'dedicateMaster'               => 'dedicateMaster',
        'serviceVpc'                   => 'serviceVpc',
        'paymentType'                  => 'paymentType',
        'resourceGroupId'              => 'resourceGroupId',
        'postpaidServiceStatus'        => 'postpaidServiceStatus',
        'description'                  => 'description',
        'esVersion'                    => 'esVersion',
        'isNewDeployment'              => 'isNewDeployment',
        'updatedAt'                    => 'updatedAt',
        'instanceId'                   => 'instanceId',
        'tags'                         => 'tags',
        'extendConfigs'                => 'extendConfigs',
        'clientNodeConfiguration'      => 'clientNodeConfiguration',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'kibanaConfiguration'          => 'kibanaConfiguration',
        'masterConfiguration'          => 'masterConfiguration',
        'networkConfig'                => 'networkConfig',
        'nodeSpec'                     => 'nodeSpec',
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
        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->dedicateMaster) {
            $res['dedicateMaster'] = $this->dedicateMaster;
        }
        if (null !== $this->serviceVpc) {
            $res['serviceVpc'] = $this->serviceVpc;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->postpaidServiceStatus) {
            $res['postpaidServiceStatus'] = $this->postpaidServiceStatus;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
        }
        if (null !== $this->isNewDeployment) {
            $res['isNewDeployment'] = $this->isNewDeployment;
        }
        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
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
        if (null !== $this->extendConfigs) {
            $res['extendConfigs'] = $this->extendConfigs;
        }
        if (null !== $this->clientNodeConfiguration) {
            $res['clientNodeConfiguration'] = null !== $this->clientNodeConfiguration ? $this->clientNodeConfiguration->toMap() : null;
        }
        if (null !== $this->elasticDataNodeConfiguration) {
            $res['elasticDataNodeConfiguration'] = null !== $this->elasticDataNodeConfiguration ? $this->elasticDataNodeConfiguration->toMap() : null;
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
        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toMap() : null;
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
        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['dedicateMaster'])) {
            $model->dedicateMaster = $map['dedicateMaster'];
        }
        if (isset($map['serviceVpc'])) {
            $model->serviceVpc = $map['serviceVpc'];
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['postpaidServiceStatus'])) {
            $model->postpaidServiceStatus = $map['postpaidServiceStatus'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['esVersion'])) {
            $model->esVersion = $map['esVersion'];
        }
        if (isset($map['isNewDeployment'])) {
            $model->isNewDeployment = $map['isNewDeployment'];
        }
        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
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
        if (isset($map['extendConfigs'])) {
            if (!empty($map['extendConfigs'])) {
                $model->extendConfigs = $map['extendConfigs'];
            }
        }
        if (isset($map['clientNodeConfiguration'])) {
            $model->clientNodeConfiguration = clientNodeConfiguration::fromMap($map['clientNodeConfiguration']);
        }
        if (isset($map['elasticDataNodeConfiguration'])) {
            $model->elasticDataNodeConfiguration = elasticDataNodeConfiguration::fromMap($map['elasticDataNodeConfiguration']);
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
        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = nodeSpec::fromMap($map['nodeSpec']);
        }

        return $model;
    }
}
