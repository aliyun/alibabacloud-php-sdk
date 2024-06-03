<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\CreateInstanceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @var ClientNodeConfiguration
     */
    public $clientNodeConfiguration;

    /**
     * @example es
     *
     * @var string
     */
    public $description;

    /**
     * @var ElasticDataNodeConfiguration
     */
    public $elasticDataNodeConfiguration;

    /**
     * @description This parameter is required.
     *
     * @example es_password
     *
     * @var string
     */
    public $esAdminPassword;

    /**
     * @description This parameter is required.
     *
     * @example 5.5.3_with_X-Pack
     *
     * @var string
     */
    public $esVersion;

    /**
     * @example advanced
     *
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
     * @description This parameter is required.
     *
     * @var NetworkConfig
     */
    public $networkConfig;

    /**
     * @description This parameter is required.
     *
     * @example 3
     *
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
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example rg-aekzu7tsu4nem4q
     *
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
     * @example 2
     *
     * @var int
     */
    public $zoneCount;

    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'clientNodeConfiguration'      => 'clientNodeConfiguration',
        'description'                  => 'description',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'esAdminPassword'              => 'esAdminPassword',
        'esVersion'                    => 'esVersion',
        'instanceCategory'             => 'instanceCategory',
        'kibanaConfiguration'          => 'kibanaConfiguration',
        'masterConfiguration'          => 'masterConfiguration',
        'networkConfig'                => 'networkConfig',
        'nodeAmount'                   => 'nodeAmount',
        'nodeSpec'                     => 'nodeSpec',
        'paymentInfo'                  => 'paymentInfo',
        'paymentType'                  => 'paymentType',
        'resourceGroupId'              => 'resourceGroupId',
        'tags'                         => 'tags',
        'warmNodeConfiguration'        => 'warmNodeConfiguration',
        'zoneCount'                    => 'zoneCount',
        'clientToken'                  => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientNodeConfiguration) {
            $res['clientNodeConfiguration'] = null !== $this->clientNodeConfiguration ? $this->clientNodeConfiguration->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->elasticDataNodeConfiguration) {
            $res['elasticDataNodeConfiguration'] = null !== $this->elasticDataNodeConfiguration ? $this->elasticDataNodeConfiguration->toMap() : null;
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
        if (null !== $this->paymentInfo) {
            $res['paymentInfo'] = null !== $this->paymentInfo ? $this->paymentInfo->toMap() : null;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
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
        if (null !== $this->warmNodeConfiguration) {
            $res['warmNodeConfiguration'] = null !== $this->warmNodeConfiguration ? $this->warmNodeConfiguration->toMap() : null;
        }
        if (null !== $this->zoneCount) {
            $res['zoneCount'] = $this->zoneCount;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
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
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
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
