<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CleanUserPermissionsRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterIds;

    /**
     * @example false
     *
     * @var bool
     */
    public $force;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
        'force'      => 'Force',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CleanUserPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = $map['ClusterIds'];
            }
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        return $model;
    }
}
