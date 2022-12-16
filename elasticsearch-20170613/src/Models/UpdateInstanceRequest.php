<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

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
     * @var WarmNodeConfiguration
     */
    public $warmNodeConfiguration;

    /**
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @example upgrade
     *
     * @var string
     */
    public $orderActionType;
    protected $_name = [
        'clientNodeConfiguration'      => 'clientNodeConfiguration',
        'elasticDataNodeConfiguration' => 'elasticDataNodeConfiguration',
        'instanceCategory'             => 'instanceCategory',
        'kibanaConfiguration'          => 'kibanaConfiguration',
        'masterConfiguration'          => 'masterConfiguration',
        'nodeAmount'                   => 'nodeAmount',
        'nodeSpec'                     => 'nodeSpec',
        'warmNodeConfiguration'        => 'warmNodeConfiguration',
        'clientToken'                  => 'clientToken',
        'force'                        => 'force',
        'orderActionType'              => 'orderActionType',
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
        if (null !== $this->elasticDataNodeConfiguration) {
            $res['elasticDataNodeConfiguration'] = null !== $this->elasticDataNodeConfiguration ? $this->elasticDataNodeConfiguration->toMap() : null;
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
        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->nodeSpec) {
            $res['nodeSpec'] = null !== $this->nodeSpec ? $this->nodeSpec->toMap() : null;
        }
        if (null !== $this->warmNodeConfiguration) {
            $res['warmNodeConfiguration'] = null !== $this->warmNodeConfiguration ? $this->warmNodeConfiguration->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return UpdateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientNodeConfiguration'])) {
            $model->clientNodeConfiguration = ClientNodeConfiguration::fromMap($map['clientNodeConfiguration']);
        }
        if (isset($map['elasticDataNodeConfiguration'])) {
            $model->elasticDataNodeConfiguration = ElasticDataNodeConfiguration::fromMap($map['elasticDataNodeConfiguration']);
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
