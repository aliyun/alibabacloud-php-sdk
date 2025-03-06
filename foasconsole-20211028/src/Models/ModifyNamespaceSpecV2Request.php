<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyNamespaceSpecV2Request\elasticResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\ModifyNamespaceSpecV2Request\guaranteedResourceSpec;
use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $ha;

    /**
     * @description This parameter is required.
     *
     * @example f-cn-wwo36qj4g06
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example di-593439443804417
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'elasticResourceSpec'    => 'ElasticResourceSpec',
        'guaranteedResourceSpec' => 'GuaranteedResourceSpec',
        'ha'                     => 'Ha',
        'instanceId'             => 'InstanceId',
        'namespace'              => 'Namespace',
        'region'                 => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticResourceSpec) {
            $res['ElasticResourceSpec'] = null !== $this->elasticResourceSpec ? $this->elasticResourceSpec->toMap() : null;
        }
        if (null !== $this->guaranteedResourceSpec) {
            $res['GuaranteedResourceSpec'] = null !== $this->guaranteedResourceSpec ? $this->guaranteedResourceSpec->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return ModifyNamespaceSpecV2Request
     */
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
