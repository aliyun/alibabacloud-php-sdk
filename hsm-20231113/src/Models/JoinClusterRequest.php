<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class JoinClusterRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     *
     * @example cluster-NZB9Oj5Yfd8Y****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the HSM that you want to add to the cluster.
     *
     * This parameter is required.
     *
     * @example hsm-cn-vj30bil8****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
