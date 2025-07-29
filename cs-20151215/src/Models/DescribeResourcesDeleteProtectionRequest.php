<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcesDeleteProtectionRequest extends Model
{
    /**
     * @description The namespace in which the resources that you want to query reside.
     *
     * This parameter is required when you set resource_type to services. Default value: default.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The names of the resources that you want to query. Separate multiple resource names with commas (,).
     *
     *   When you set resource_type to namespaces, you must specify namespace names. If you leave this parameter empty, all namespaces in the cluster are queried.
     *   If you set resource_type to services, you must specify Service names.
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

    public function validate() {}

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
