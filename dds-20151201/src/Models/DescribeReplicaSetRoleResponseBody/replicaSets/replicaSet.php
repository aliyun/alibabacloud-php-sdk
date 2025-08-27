<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponseBody\replicaSets;

use AlibabaCloud\Dara\Model;

class replicaSet extends Model
{
    /**
     * @var string
     */
    public $connectionDomain;

    /**
     * @var string
     */
    public $connectionPort;

    /**
     * @var string
     */
    public $connectionType;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $replicaSetRole;

    /**
     * @var string
     */
    public $roleId;
    protected $_name = [
        'connectionDomain' => 'ConnectionDomain',
        'connectionPort' => 'ConnectionPort',
        'connectionType' => 'ConnectionType',
        'expiredTime' => 'ExpiredTime',
        'networkType' => 'NetworkType',
        'replicaSetRole' => 'ReplicaSetRole',
        'roleId' => 'RoleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }

        if (null !== $this->connectionPort) {
            $res['ConnectionPort'] = $this->connectionPort;
        }

        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }

        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->replicaSetRole) {
            $res['ReplicaSetRole'] = $this->replicaSetRole;
        }

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }

        if (isset($map['ConnectionPort'])) {
            $model->connectionPort = $map['ConnectionPort'];
        }

        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }

        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['ReplicaSetRole'])) {
            $model->replicaSetRole = $map['ReplicaSetRole'];
        }

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
