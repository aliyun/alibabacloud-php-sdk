<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AttachClusterToHubRequest extends Model
{
    /**
     * @description Specifies whether to associate the clusters with Service Mesh (ASM) instances. Valid values:
     *
     * @example true
     *
     * @var bool
     */
    public $attachToMesh;

    /**
     * @description The ID of the master instance.
     *
     * @example cd08d62e6506a4fa5a8c44c19d0fc****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description A JSON string that can be parsed into a string array. The string specifies the clusters that you want to associate with the master instance.
     *
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
