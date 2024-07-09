<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcesDeleteProtectionRequest extends Model
{
    /**
     * @description The namespace to which the resource belongs.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the resource that you want to query. Separate multiple resource names with commas (,).
     *
     * @example test1,test2
     *
     * @var string
     */
    public $resources;
    protected $_name = [
        'namespace' => 'namespace',
        'resources' => 'resources',
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
        if (null !== $this->resources) {
            $res['resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcesDeleteProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['resources'])) {
            $model->resources = $map['resources'];
        }

        return $model;
    }
}
