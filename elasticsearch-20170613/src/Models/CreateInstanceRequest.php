<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateInstanceRequest\tags;

class CreateInstanceRequest extends Model
{
    /**
     * @var ClientNodeConfiguration
     */
    public $clientNodeConfiguration;

    /**
     * @var string
     */
    public $description;

    /**
     * @var ElasticDataNodeConfiguration
     */
    public $elasticDataNodeConfiguration;

    /**
     * @var string
     */
    public $esAdminPassword;

    /**
     * @var string
     */
    public $esVersion;

    /**
     * @var string
     */
    public $instanceCategory;

    /**
     * @var KibanaNodeConfiguration
     */
    public $kibanaConfiguration;

    /**
     * @var MasterNodeConfiguration
     */
    public $masterConfiguration;

    /**
     * @var NetworkConfig
     */
    public $networkConfig;

    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var NodeSpec
     */
    public $nodeSpec;

    /**
     * @var PaymentInfo
     */
    public $paymentInfo;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var WarmNodeConfiguration
     */
    public $warmNodeConfiguration;

    /**
     * @var int
     */
    public $zoneCount;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'clientNodeConfiguration' => 'clientNodeConfiguration',
        'description' => 'description',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'esAdminPassword' => 'esAdminPassword',
        'esVersion' => 'esVersion',
        'instanceCategory' => 'instanceCategory',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'masterConfiguration' => 'masterConfiguration',
        'networkConfig' => 'networkConfig',
        'nodeAmount' => 'nodeAmount',
        'nodeSpec' => 'nodeSpec',
        'paymentInfo' => 'paymentInfo',
        'paymentType' => 'paymentType',
        'resourceGroupId' => 'resourceGroupId',
        'tags' => 'tags',
        'warmNodeConfiguration' => 'warmNodeConfiguration',
        'zoneCount' => 'zoneCount',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (null !== $this->clientNodeConfiguration) {
            $this->clientNodeConfiguration->validate();
        }
        if (null !== $this->elasticDataNodeConfiguration) {
            $this->elasticDataNodeConfiguration->validate();
        }
        if (null !== $this->kibanaConfiguration) {
            $this->kibanaConfiguration->validate();
        }
        if (null !== $this->masterConfiguration) {
            $this->masterConfiguration->validate();
        }
        if (null !== $this->networkConfig) {
            $this->networkConfig->validate();
        }
        if (null !== $this->nodeSpec) {
            $this->nodeSpec->validate();
        }
        if (null !== $this->paymentInfo) {
            $this->paymentInfo->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->warmNodeConfiguration) {
            $this->warmNodeConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientNodeConfiguration) {
            $res['clientNodeConfiguration'] = null !== $this->clientNodeConfiguration ? $this->clientNodeConfiguration->toArray($noStream) : $this->clientNodeConfiguration;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->elasticDataNodeConfiguration) {
            $res['elasticDataNodeConfiguration'] = null !== $this->elasticDataNodeConfiguration ? $this->elasticDataNodeConfiguration->toArray($noStream) : $this->elasticDataNodeConfiguration;
        }

        if (null !== $this->esAdminPassword) {
            $res['esAdminPassword'] = $this->esAdminPassword;
        }

        if (null !== $this->esVersion) {
            $res['esVersion'] = $this->esVersion;
        }

        if (null !== $this->instanceCategory) {
            $res['instanceCategory'] = $this->instanceCategory;
        }

        if (null !== $this->kibanaConfiguration) {
            $res['kibanaConfiguration'] = null !== $this->kibanaConfiguration ? $this->kibanaConfiguration->toArray($noStream) : $this->kibanaConfiguration;
        }

        if (null !== $this->masterConfiguration) {
            $res['masterConfiguration'] = null !== $this->masterConfiguration ? $this->masterConfiguration->toArray($noStream) : $this->masterConfiguration;
        }

        if (null !== $this->networkConfig) {
            $res['networkConfig'] = null !== $this->networkConfig ? $this->networkConfig->toArray($noStream) : $this->networkConfig;
        }

        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }

        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toArray($noStream) : $this->nodeSpec;
        }

        if (null !== $this->paymentInfo) {
            $res['paymentInfo'] = null !== $this->paymentInfo ? $this->paymentInfo->toArray($noStream) : $this->paymentInfo;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->warmNodeConfiguration) {
            $res['warmNodeConfiguration'] = null !== $this->warmNodeConfiguration ? $this->warmNodeConfiguration->toArray($noStream) : $this->warmNodeConfiguration;
        }

        if (null !== $this->zoneCount) {
            $res['zoneCount'] = $this->zoneCount;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['clientNodeConfiguration'])) {
            $model->clientNodeConfiguration = ClientNodeConfiguration::fromMap($map['clientNodeConfiguration']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['elasticDataNodeConfiguration'])) {
            $model->elasticDataNodeConfiguration = ElasticDataNodeConfiguration::fromMap($map['elasticDataNodeConfiguration']);
        }

        if (isset($map['esAdminPassword'])) {
            $model->esAdminPassword = $map['esAdminPassword'];
        }

        if (isset($map['esVersion'])) {
            $model->esVersion = $map['esVersion'];
        }

        if (isset($map['instanceCategory'])) {
            $model->instanceCategory = $map['instanceCategory'];
        }

        if (isset($map['kibanaConfiguration'])) {
            $model->kibanaConfiguration = KibanaNodeConfiguration::fromMap($map['kibanaConfiguration']);
        }

        if (isset($map['masterConfiguration'])) {
            $model->masterConfiguration = MasterNodeConfiguration::fromMap($map['masterConfiguration']);
        }

        if (isset($map['networkConfig'])) {
            $model->networkConfig = NetworkConfig::fromMap($map['networkConfig']);
        }

        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }

        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = NodeSpec::fromMap($map['nodeSpec']);
        }

        if (isset($map['paymentInfo'])) {
            $model->paymentInfo = PaymentInfo::fromMap($map['paymentInfo']);
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['warmNodeConfiguration'])) {
            $model->warmNodeConfiguration = WarmNodeConfiguration::fromMap($map['warmNodeConfiguration']);
        }

        if (isset($map['zoneCount'])) {
            $model->zoneCount = $map['zoneCount'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
