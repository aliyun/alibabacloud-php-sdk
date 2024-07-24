<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CleanUserPermissionsShrinkRequest extends Model
{
    /**
     * @description The cluster IDs.
     *
     *   If cluster IDs are specified, only the kubeconfig files of the specified clusters and the relevant RBAC permissions are deleted and revoked.
     *
     * @var string
     */
    public $clusterIdsShrink;

    /**
     * @description Specifies whether to forcefully delete the specified kubeconfig files. Valid values:
     *
     *   **false** (default): checks the cluster access records within the previous seven days before deleting the kubeconfig files. The kubeconfig files are not deleted if cluster access records are found or fail to be retrieved.
     *   **true**: forcefully deletes the kubeconfig files without checking cluster access records.
     *
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
