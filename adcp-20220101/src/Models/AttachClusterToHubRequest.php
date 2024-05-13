<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AttachClusterToHubRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **AttachClusterToHub**.
     *
     * @example true
     *
     * @var bool
     */
    public $attachToMesh;

    /**
     * @description The ID of the task.
     *
     * This parameter is required.
     * @example cd08d62e6506a4fa5a8c44c19d0fc****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the request.
     *
     * This parameter is required.
     * @example ["cdea10134be464ba4acb36cc831a6****"]
     *
     * @var string
     */
    public $clusterIds;
    protected $_name = [
        'attachToMesh' => 'AttachToMesh',
        'clusterId'    => 'ClusterId',
        'clusterIds'   => 'ClusterIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachToMesh) {
            $res['AttachToMesh'] = $this->attachToMesh;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachClusterToHubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachToMesh'])) {
            $model->attachToMesh = $map['AttachToMesh'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterIds'])) {
            $model->clusterIds = $map['ClusterIds'];
        }

        return $model;
    }
}
