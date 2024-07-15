<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CleanUserPermissionsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterIdsShrink;

    /**
     * @example false
     *
     * @var bool
     */
    public $force;
    protected $_name = [
        'clusterIdsShrink' => 'ClusterIds',
        'force'            => 'Force',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIdsShrink) {
            $res['ClusterIds'] = $this->clusterIdsShrink;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CleanUserPermissionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            $model->clusterIdsShrink = $map['ClusterIds'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        return $model;
    }
}
