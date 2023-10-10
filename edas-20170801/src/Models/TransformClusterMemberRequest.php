<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class TransformClusterMemberRequest extends Model
{
    /**
     * @description The ID of the instance that you want to import or migrate. Separate multiple IDs with commas (,).
     *
     *   An instance may not belong to a cluster, but an instance can belong to only one cluster at most.
     *   The ECS instances and the destination cluster must be in the same virtual private cloud (VPC).
     *
     * @example i-2ze7s2v0b789k60p****
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The logon password of the ECS instance that you want to import or migrate to the cluster.
     *
     * @example Hello****
     *
     * @var string
     */
    public $password;

    /**
     * @description The ID of the destination cluster.
     *
     * @example b3e3f77b-462e-****-****-bec8727a****
     *
     * @var string
     */
    public $targetClusterId;
    protected $_name = [
        'instanceIds'     => 'InstanceIds',
        'password'        => 'Password',
        'targetClusterId' => 'TargetClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->targetClusterId) {
            $res['TargetClusterId'] = $this->targetClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransformClusterMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['TargetClusterId'])) {
            $model->targetClusterId = $map['TargetClusterId'];
        }

        return $model;
    }
}
