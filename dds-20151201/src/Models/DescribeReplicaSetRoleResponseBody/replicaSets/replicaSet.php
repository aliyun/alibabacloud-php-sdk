<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponseBody\replicaSets;

use AlibabaCloud\Tea\Model;

class replicaSet extends Model
{
    /**
     * @description The endpoint of the node.
     *
     * @example dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionDomain;

    /**
     * @description The port number that is used to connect to the node.
     *
     * @example 3717
     *
     * @var string
     */
    public $connectionPort;

    /**
     * @description The remaining duration of the classic network endpoint. Unit: seconds.
     *
     * @example 1209582
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **VPC**: the virtual private cloud (VPC)
     *   **Classic**: the classic network
     *   **Public**: the Internet
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The role of the node in the replica set instance. Valid values:
     *
     *   **Primary**
     *   **Secondary**
     *
     * @example Primary
     *
     * @var string
     */
    public $replicaSetRole;

    /**
     * @description The role ID of the node.
     *
     * @example 651xxxxx
     *
     * @var string
     */
    public $roleId;
    protected $_name = [
        'connectionDomain' => 'ConnectionDomain',
        'connectionPort'   => 'ConnectionPort',
        'expiredTime'      => 'ExpiredTime',
        'networkType'      => 'NetworkType',
        'replicaSetRole'   => 'ReplicaSetRole',
        'roleId'           => 'RoleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionDomain) {
            $res['ConnectionDomain'] = $this->connectionDomain;
        }
        if (null !== $this->connectionPort) {
            $res['ConnectionPort'] = $this->connectionPort;
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

    /**
     * @param array $map
     *
     * @return replicaSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionDomain'])) {
            $model->connectionDomain = $map['ConnectionDomain'];
        }
        if (isset($map['ConnectionPort'])) {
            $model->connectionPort = $map['ConnectionPort'];
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
