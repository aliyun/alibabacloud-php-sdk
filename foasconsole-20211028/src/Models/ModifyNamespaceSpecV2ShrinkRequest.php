<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Tea\Model;

class ModifyNamespaceSpecV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $elasticResourceSpecShrink;

    /**
     * @var string
     */
    public $guaranteedResourceSpecShrink;

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
        'elasticResourceSpecShrink'    => 'ElasticResourceSpec',
        'guaranteedResourceSpecShrink' => 'GuaranteedResourceSpec',
        'ha'                           => 'Ha',
        'instanceId'                   => 'InstanceId',
        'namespace'                    => 'Namespace',
        'region'                       => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticResourceSpecShrink) {
            $res['ElasticResourceSpec'] = $this->elasticResourceSpecShrink;
        }
        if (null !== $this->guaranteedResourceSpecShrink) {
            $res['GuaranteedResourceSpec'] = $this->guaranteedResourceSpecShrink;
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
     * @return ModifyNamespaceSpecV2ShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticResourceSpec'])) {
            $model->elasticResourceSpecShrink = $map['ElasticResourceSpec'];
        }
        if (isset($map['GuaranteedResourceSpec'])) {
            $model->guaranteedResourceSpecShrink = $map['GuaranteedResourceSpec'];
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
