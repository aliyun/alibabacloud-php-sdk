<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyNamespaceSpecV2Request\elasticResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyNamespaceSpecV2Request\guaranteedResourceSpec;

class ModifyNamespaceSpecV2Request extends Model
{
    /**
     * @var elasticResourceSpec
     */
    public $elasticResourceSpec;

    /**
     * @var guaranteedResourceSpec
     */
    public $guaranteedResourceSpec;

    /**
     * @var bool
     */
    public $ha;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'elasticResourceSpec' => 'ElasticResourceSpec',
        'guaranteedResourceSpec' => 'GuaranteedResourceSpec',
        'ha' => 'Ha',
        'instanceId' => 'InstanceId',
        'namespace' => 'Namespace',
        'region' => 'Region',
    ];

    public function validate()
    {
        if (null !== $this->elasticResourceSpec) {
            $this->elasticResourceSpec->validate();
        }
        if (null !== $this->guaranteedResourceSpec) {
            $this->guaranteedResourceSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticResourceSpec) {
            $res['ElasticResourceSpec'] = null !== $this->elasticResourceSpec ? $this->elasticResourceSpec->toArray($noStream) : $this->elasticResourceSpec;
        }

        if (null !== $this->guaranteedResourceSpec) {
            $res['GuaranteedResourceSpec'] = null !== $this->guaranteedResourceSpec ? $this->guaranteedResourceSpec->toArray($noStream) : $this->guaranteedResourceSpec;
        }

        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['ElasticResourceSpec'])) {
            $model->elasticResourceSpec = elasticResourceSpec::fromMap($map['ElasticResourceSpec']);
        }

        if (isset($map['GuaranteedResourceSpec'])) {
            $model->guaranteedResourceSpec = guaranteedResourceSpec::fromMap($map['GuaranteedResourceSpec']);
        }

        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
