<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeResourcesDeleteProtectionResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The name of the resource.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The namespace to which the resource belongs.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The type of resource for which deletion protection is enabled.
     *
     * @example namespaces
     *
     * @var string
     */
    public $resource;

    /**
     * @description Indicates whether deletion protection is enabled.
     *
     *   true: deletion protection is enabled.
     *   false: deletion protection is disabled.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $protection;
    protected $_name = [
        'name'       => 'name',
        'namespace'  => 'namespace',
        'resource'   => 'resource',
        'protection' => 'protection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }
        if (null !== $this->protection) {
            $res['protection'] = $this->protection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }
        if (isset($map['protection'])) {
            $model->protection = $map['protection'];
        }

        return $model;
    }
}
