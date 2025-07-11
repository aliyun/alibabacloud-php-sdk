<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class UpdateClusterRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxljob-c20f7ec9a78
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example xx-test-1107
     *
     * @var string
     */
    public $clusterName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        return $model;
    }
}
