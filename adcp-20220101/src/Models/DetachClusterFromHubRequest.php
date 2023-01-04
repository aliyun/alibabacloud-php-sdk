<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DetachClusterFromHubRequest extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example cb09fda0dc2f94a8397c76638c7ec****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description A JSON string that can be parsed into a string array. The string specifies the clusters that you want to disassociate from the master instance.
     *
     * @example ["c1c731554c1ec4a1ca9bb690ff9ed****"]
     *
     * @var string
     */
    public $clusterIds;

    /**
     * @description Specifies whether to only disassociate the clusters from Service Mesh (ASM) instances. Valid values: - true: only disassociates the clusters from ASM instances. - false: disassociates the clusters from the master instance and ASM instances.
     *
     * @example false
     *
     * @var bool
     */
    public $detachFromMesh;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'clusterIds'     => 'ClusterIds',
        'detachFromMesh' => 'DetachFromMesh',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->detachFromMesh) {
            $res['DetachFromMesh'] = $this->detachFromMesh;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachClusterFromHubRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterIds'])) {
            $model->clusterIds = $map['ClusterIds'];
        }
        if (isset($map['DetachFromMesh'])) {
            $model->detachFromMesh = $map['DetachFromMesh'];
        }

        return $model;
    }
}
