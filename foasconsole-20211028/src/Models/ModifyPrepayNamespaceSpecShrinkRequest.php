<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Tea\Model;

class ModifyPrepayNamespaceSpecShrinkRequest extends Model
{
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
     * @example di-593440219799842
     *
     * @var string
     */
    public $namespace;

    /**
     * @description This parameter is required.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $resourceSpecShrink;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'namespace'          => 'Namespace',
        'region'             => 'Region',
        'resourceSpecShrink' => 'ResourceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceSpecShrink) {
            $res['ResourceSpec'] = $this->resourceSpecShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyPrepayNamespaceSpecShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
            $model->resourceSpecShrink = $map['ResourceSpec'];
        }

        return $model;
    }
}
