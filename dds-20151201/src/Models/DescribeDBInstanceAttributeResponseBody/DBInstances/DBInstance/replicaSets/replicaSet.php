<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\replicaSets;

use AlibabaCloud\Tea\Model;

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
    public $networkType;

    /**
     * @var string
     */
    public $replicaSetRole;

    /**
     * @var string
     */
    public $VPCCloudInstanceId;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectionDomain'   => 'ConnectionDomain',
        'connectionPort'     => 'ConnectionPort',
        'networkType'        => 'NetworkType',
        'replicaSetRole'     => 'ReplicaSetRole',
        'VPCCloudInstanceId' => 'VPCCloudInstanceId',
        'VPCId'              => 'VPCId',
        'vSwitchId'          => 'VSwitchId',
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
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->replicaSetRole) {
            $res['ReplicaSetRole'] = $this->replicaSetRole;
        }
        if (null !== $this->VPCCloudInstanceId) {
            $res['VPCCloudInstanceId'] = $this->VPCCloudInstanceId;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['ReplicaSetRole'])) {
            $model->replicaSetRole = $map['ReplicaSetRole'];
        }
        if (isset($map['VPCCloudInstanceId'])) {
            $model->VPCCloudInstanceId = $map['VPCCloudInstanceId'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
