<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class UpdateResourcesDeleteProtectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $protection;
    /**
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
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->resources)) {
                $res['resources'] = [];
                $n1               = 0;
                foreach ($this->resources as $item1) {
                    $res['resources'][$n1++] = $item1;
                }
            }
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
                $model->resources = [];
                $n1               = 0;
                foreach ($map['resources'] as $item1) {
                    $model->resources[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
