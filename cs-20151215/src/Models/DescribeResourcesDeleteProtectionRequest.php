<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourcesDeleteProtectionRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $resources;
    protected $_name = [
        'namespace' => 'namespace',
        'resources' => 'resources',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['resources'])) {
            $model->resources = $map['resources'];
        }

        return $model;
    }
}
