<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class LeaveClusterRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * This parameter is required.
     *
     * @example cluster-729dm40FG****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the HSM.
     *
     * This parameter is required.
     *
     * @example hsm-cn-mp90fxef****
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
     * @return LeaveClusterRequest
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
