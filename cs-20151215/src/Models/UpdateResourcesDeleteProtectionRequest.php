<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourcesDeleteProtectionRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example services
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'enable'       => 'enable',
        'namespace'    => 'namespace',
        'resourceType' => 'resource_type',
        'resources'    => 'resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->resourceType) {
            $res['resource_type'] = $this->resourceType;
        }
        if (null !== $this->resources) {
            $res['resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourcesDeleteProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['resource_type'])) {
            $model->resourceType = $map['resource_type'];
        }
        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = $map['resources'];
            }
        }

        return $model;
    }
}
