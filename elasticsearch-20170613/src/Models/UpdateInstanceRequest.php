<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @var ClientNodeConfiguration
     */
    public $clientNodeConfiguration;

    /**
     * @var ElasticDataNodeConfiguration
     */
    public $elasticDataNodeConfiguration;

    /**
     * @var IndexNodeConfiguration
     */
    public $indexNodeConfiguration;

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
     * @var int
     */
    public $nodeAmount;

    /**
     * @var NodeSpec
     */
    public $nodeSpec;

    /**
     * @var SearchNodeConfiguration
     */
    public $searchNodeConfiguration;

    /**
     * @var string
     */
    public $updateType;

    /**
     * @var WarmNodeConfiguration
     */
    public $warmNodeConfiguration;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $orderActionType;
    protected $_name = [
        'clientNodeConfiguration' => 'clientNodeConfiguration',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'indexNodeConfiguration' => 'indexNodeConfiguration',
        'instanceCategory' => 'instanceCategory',
        'kibanaConfiguration' => 'kibanaConfiguration',
        'masterConfiguration' => 'masterConfiguration',
        'nodeAmount' => 'nodeAmount',
        'nodeSpec' => 'nodeSpec',
        'searchNodeConfiguration' => 'searchNodeConfiguration',
        'updateType' => 'updateType',
        'warmNodeConfiguration' => 'warmNodeConfiguration',
        'clientToken' => 'clientToken',
        'force' => 'force',
        'orderActionType' => 'orderActionType',
    ];

    public function validate()
    {
        if (null !== $this->clientNodeConfiguration) {
            $this->clientNodeConfiguration->validate();
        }
        if (null !== $this->elasticDataNodeConfiguration) {
            $this->elasticDataNodeConfiguration->validate();
        }
        if (null !== $this->indexNodeConfiguration) {
            $this->indexNodeConfiguration->validate();
        }
        if (null !== $this->kibanaConfiguration) {
            $this->kibanaConfiguration->validate();
        }
        if (null !== $this->masterConfiguration) {
            $this->masterConfiguration->validate();
        }
        if (null !== $this->nodeSpec) {
            $this->nodeSpec->validate();
        }
        if (null !== $this->searchNodeConfiguration) {
            $this->searchNodeConfiguration->validate();
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

        if (null !== $this->elasticDataNodeConfiguration) {
            $res['elasticDataNodeConfiguration'] = null !== $this->elasticDataNodeConfiguration ? $this->elasticDataNodeConfiguration->toArray($noStream) : $this->elasticDataNodeConfiguration;
        }

        if (null !== $this->indexNodeConfiguration) {
            $res['indexNodeConfiguration'] = null !== $this->indexNodeConfiguration ? $this->indexNodeConfiguration->toArray($noStream) : $this->indexNodeConfiguration;
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

        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }

        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toArray($noStream) : $this->nodeSpec;
        }

        if (null !== $this->searchNodeConfiguration) {
            $res['searchNodeConfiguration'] = null !== $this->searchNodeConfiguration ? $this->searchNodeConfiguration->toArray($noStream) : $this->searchNodeConfiguration;
        }

        if (null !== $this->updateType) {
            $res['updateType'] = $this->updateType;
        }

        if (null !== $this->warmNodeConfiguration) {
            $res['warmNodeConfiguration'] = null !== $this->warmNodeConfiguration ? $this->warmNodeConfiguration->toArray($noStream) : $this->warmNodeConfiguration;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->force) {
            $res['force'] = $this->force;
        }

        if (null !== $this->orderActionType) {
            $res['orderActionType'] = $this->orderActionType;
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

        if (isset($map['elasticDataNodeConfiguration'])) {
            $model->elasticDataNodeConfiguration = ElasticDataNodeConfiguration::fromMap($map['elasticDataNodeConfiguration']);
        }

        if (isset($map['indexNodeConfiguration'])) {
            $model->indexNodeConfiguration = IndexNodeConfiguration::fromMap($map['indexNodeConfiguration']);
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

        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }

        if (isset($map['nodeSpec'])) {
            $model->nodeSpec = NodeSpec::fromMap($map['nodeSpec']);
        }

        if (isset($map['searchNodeConfiguration'])) {
            $model->searchNodeConfiguration = SearchNodeConfiguration::fromMap($map['searchNodeConfiguration']);
        }

        if (isset($map['updateType'])) {
            $model->updateType = $map['updateType'];
        }

        if (isset($map['warmNodeConfiguration'])) {
            $model->warmNodeConfiguration = WarmNodeConfiguration::fromMap($map['warmNodeConfiguration']);
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        if (isset($map['orderActionType'])) {
            $model->orderActionType = $map['orderActionType'];
        }

        return $model;
    }
}
