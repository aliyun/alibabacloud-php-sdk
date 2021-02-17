<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponseBody\replicaSets;

use AlibabaCloud\Tea\Model;

class replicaSet extends Model
{
    /**
     * @var string
     */
    public $connectionPort;

    /**
     * @var string
     */
    public $replicaSetRole;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $connectionDomain;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'connectionPort'   => 'ConnectionPort',
        'replicaSetRole'   => 'ReplicaSetRole',
        'expiredTime'      => 'ExpiredTime',
        'connectionDomain' => 'ConnectionDomain',
        'networkType'      => 'NetworkType',
        'roleId'           => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionPort) {
            $res['ConnectionPort'] = $this->connectionPort;
        }
        if (null !== $this->replicaSetRole) {
            $res['ReplicaSetRole'] = $this->replicaSetRole;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicaSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionPort'])) {
            $model->connectionPort = $map['ConnectionPort'];
        }
        if (isset($map['ReplicaSetRole'])) {
            $model->replicaSetRole = $map['ReplicaSetRole'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
