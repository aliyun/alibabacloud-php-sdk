<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateNamespaceRequest;

use AlibabaCloud\SDK\Foasconsole\V20190601\Models\CreateNamespaceRequest\createNamespaceRequest\resourceSpec;
use AlibabaCloud\Tea\Model;

class createNamespaceRequest extends Model
{
    /**
     * @var bool
     */
    public $ha;

    /**
     * @example 223493C7-FCA9-13D4-B75B-AF8B32F4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ns-1
     *
     * @var string
     */
    public $namespace;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;
    protected $_name = [
        'ha'           => 'Ha',
        'instanceId'   => 'InstanceId',
        'namespace'    => 'Namespace',
        'region'       => 'Region',
        'resourceSpec' => 'ResourceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createNamespaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }

        return $model;
    }
}
