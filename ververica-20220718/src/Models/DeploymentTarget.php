<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class DeploymentTarget extends Model
{
    /**
     * @example deployment target
     *
     * @var string
     */
    public $name;

    /**
     * @example namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @var ResourceQuota
     */
    public $quota;
    protected $_name = [
        'name'      => 'name',
        'namespace' => 'namespace',
        'quota'     => 'quota',
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
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeploymentTarget
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
        if (isset($map['quota'])) {
            $model->quota = ResourceQuota::fromMap($map['quota']);
        }

        return $model;
    }
}
