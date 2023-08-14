<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody;

use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType\handlers;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourceTypeResponseBody\resourceType\info;
use AlibabaCloud\Tea\Model;

class resourceType extends Model
{
    /**
     * @var string[]
     */
    public $createOnlyProperties;

    /**
     * @var string[]
     */
    public $deleteOnlyProperties;

    /**
     * @var string[]
     */
    public $filterProperties;

    /**
     * @var string[]
     */
    public $getOnlyProperties;

    /**
     * @var string[]
     */
    public $getResponseProperties;

    /**
     * @var handlers
     */
    public $handlers;

    /**
     * @var info
     */
    public $info;

    /**
     * @var string[]
     */
    public $listOnlyProperties;

    /**
     * @var string[]
     */
    public $listResponseProperties;

    /**
     * @example /properties/InstanceId
     *
     * @var string
     */
    public $primaryIdentifier;

    /**
     * @example ECS
     *
     * @var string
     */
    public $product;

    /**
     * @var mixed[]
     */
    public $properties;

    /**
     * @var string[]
     */
    public $publicProperties;

    /**
     * @var string[]
     */
    public $readOnlyProperties;

    /**
     * @var string[]
     */
    public $required;

    /**
     * @example Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $sensitiveInfoProperties;

    /**
     * @var string[]
     */
    public $updateOnlyProperties;

    /**
     * @var string[]
     */
    public $updateTypeProperties;
    protected $_name = [
        'createOnlyProperties'    => 'createOnlyProperties',
        'deleteOnlyProperties'    => 'deleteOnlyProperties',
        'filterProperties'        => 'filterProperties',
        'getOnlyProperties'       => 'getOnlyProperties',
        'getResponseProperties'   => 'getResponseProperties',
        'handlers'                => 'handlers',
        'info'                    => 'info',
        'listOnlyProperties'      => 'listOnlyProperties',
        'listResponseProperties'  => 'listResponseProperties',
        'primaryIdentifier'       => 'primaryIdentifier',
        'product'                 => 'product',
        'properties'              => 'properties',
        'publicProperties'        => 'publicProperties',
        'readOnlyProperties'      => 'readOnlyProperties',
        'required'                => 'required',
        'resourceType'            => 'resourceType',
        'sensitiveInfoProperties' => 'sensitiveInfoProperties',
        'updateOnlyProperties'    => 'updateOnlyProperties',
        'updateTypeProperties'    => 'updateTypeProperties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createOnlyProperties) {
            $res['createOnlyProperties'] = $this->createOnlyProperties;
        }
        if (null !== $this->deleteOnlyProperties) {
            $res['deleteOnlyProperties'] = $this->deleteOnlyProperties;
        }
        if (null !== $this->filterProperties) {
            $res['filterProperties'] = $this->filterProperties;
        }
        if (null !== $this->getOnlyProperties) {
            $res['getOnlyProperties'] = $this->getOnlyProperties;
        }
        if (null !== $this->getResponseProperties) {
            $res['getResponseProperties'] = $this->getResponseProperties;
        }
        if (null !== $this->handlers) {
            $res['handlers'] = null !== $this->handlers ? $this->handlers->toMap() : null;
        }
        if (null !== $this->info) {
            $res['info'] = null !== $this->info ? $this->info->toMap() : null;
        }
        if (null !== $this->listOnlyProperties) {
            $res['listOnlyProperties'] = $this->listOnlyProperties;
        }
        if (null !== $this->listResponseProperties) {
            $res['listResponseProperties'] = $this->listResponseProperties;
        }
        if (null !== $this->primaryIdentifier) {
            $res['primaryIdentifier'] = $this->primaryIdentifier;
        }
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }
        if (null !== $this->publicProperties) {
            $res['publicProperties'] = $this->publicProperties;
        }
        if (null !== $this->readOnlyProperties) {
            $res['readOnlyProperties'] = $this->readOnlyProperties;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->sensitiveInfoProperties) {
            $res['sensitiveInfoProperties'] = $this->sensitiveInfoProperties;
        }
        if (null !== $this->updateOnlyProperties) {
            $res['updateOnlyProperties'] = $this->updateOnlyProperties;
        }
        if (null !== $this->updateTypeProperties) {
            $res['updateTypeProperties'] = $this->updateTypeProperties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createOnlyProperties'])) {
            if (!empty($map['createOnlyProperties'])) {
                $model->createOnlyProperties = $map['createOnlyProperties'];
            }
        }
        if (isset($map['deleteOnlyProperties'])) {
            if (!empty($map['deleteOnlyProperties'])) {
                $model->deleteOnlyProperties = $map['deleteOnlyProperties'];
            }
        }
        if (isset($map['filterProperties'])) {
            if (!empty($map['filterProperties'])) {
                $model->filterProperties = $map['filterProperties'];
            }
        }
        if (isset($map['getOnlyProperties'])) {
            if (!empty($map['getOnlyProperties'])) {
                $model->getOnlyProperties = $map['getOnlyProperties'];
            }
        }
        if (isset($map['getResponseProperties'])) {
            if (!empty($map['getResponseProperties'])) {
                $model->getResponseProperties = $map['getResponseProperties'];
            }
        }
        if (isset($map['handlers'])) {
            $model->handlers = handlers::fromMap($map['handlers']);
        }
        if (isset($map['info'])) {
            $model->info = info::fromMap($map['info']);
        }
        if (isset($map['listOnlyProperties'])) {
            if (!empty($map['listOnlyProperties'])) {
                $model->listOnlyProperties = $map['listOnlyProperties'];
            }
        }
        if (isset($map['listResponseProperties'])) {
            if (!empty($map['listResponseProperties'])) {
                $model->listResponseProperties = $map['listResponseProperties'];
            }
        }
        if (isset($map['primaryIdentifier'])) {
            $model->primaryIdentifier = $map['primaryIdentifier'];
        }
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }
        if (isset($map['publicProperties'])) {
            if (!empty($map['publicProperties'])) {
                $model->publicProperties = $map['publicProperties'];
            }
        }
        if (isset($map['readOnlyProperties'])) {
            if (!empty($map['readOnlyProperties'])) {
                $model->readOnlyProperties = $map['readOnlyProperties'];
            }
        }
        if (isset($map['required'])) {
            if (!empty($map['required'])) {
                $model->required = $map['required'];
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['sensitiveInfoProperties'])) {
            if (!empty($map['sensitiveInfoProperties'])) {
                $model->sensitiveInfoProperties = $map['sensitiveInfoProperties'];
            }
        }
        if (isset($map['updateOnlyProperties'])) {
            if (!empty($map['updateOnlyProperties'])) {
                $model->updateOnlyProperties = $map['updateOnlyProperties'];
            }
        }
        if (isset($map['updateTypeProperties'])) {
            if (!empty($map['updateTypeProperties'])) {
                $model->updateTypeProperties = $map['updateTypeProperties'];
            }
        }

        return $model;
    }
}
