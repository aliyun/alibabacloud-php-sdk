<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterResourcesResponse\body;

use AlibabaCloud\Tea\Model;

class associatedObject extends Model
{
    /**
     * @description The Kubernetes object type.
     *
     * @example Service
     *
     * @var string
     */
    public $kind;

    /**
     * @description The namespace in which the Kubernetes object resides.
     *
     * @example kube-system
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The Kubernetes object name.
     *
     * @example nginx-ingress-lb
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'kind'      => 'kind',
        'namespace' => 'namespace',
        'name'      => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
