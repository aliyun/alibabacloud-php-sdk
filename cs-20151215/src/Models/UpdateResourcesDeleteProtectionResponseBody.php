<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourcesDeleteProtectionResponseBody extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $protection;

    /**
     * @description Id of the request
     *
     * @example 0527ac9a-c899-4341-a21a-xxxxxxxxx
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'namespace'    => 'namespace',
        'protection'   => 'protection',
        'requestId'    => 'requestId',
        'resourceType' => 'resource_type',
        'resources'    => 'resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->protection) {
            $res['protection'] = $this->protection;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
     * @return UpdateResourcesDeleteProtectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['protection'])) {
            $model->protection = $map['protection'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
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
