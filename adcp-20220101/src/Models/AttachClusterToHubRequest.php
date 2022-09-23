<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class AttachClusterToHubRequest extends Model
{
    /**
     * @var bool
     */
    public $attachToMesh;

    /**
     * @var string
     */
    public $clusterId;

    /**
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
