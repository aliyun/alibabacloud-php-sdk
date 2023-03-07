<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class DeleteClusterRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * You can call the [ListClusters](~~87116~~) operation to query the cluster ID.
     * @example ehpc-hz-QKKVqO****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to release Elastic Compute Service (ECS) instances that are created by using Elastic High Performance Computing (E-HPC).
     *
     * Default value: true
     * @example true
     *
     * @var string
     */
    public $releaseInstance;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'releaseInstance' => 'ReleaseInstance',
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
        if (null !== $this->releaseInstance) {
            $res['ReleaseInstance'] = $this->releaseInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ReleaseInstance'])) {
            $model->releaseInstance = $map['ReleaseInstance'];
        }

        return $model;
    }
}
