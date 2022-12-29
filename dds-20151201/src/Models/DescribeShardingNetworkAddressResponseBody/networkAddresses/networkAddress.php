<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\networkAddresses;

use AlibabaCloud\Tea\Model;

class networkAddress extends Model
{
    /**
     * @description The remaining duration of the classic network address. Unit: seconds.
     *
     * @example 2591963
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The IP address of the instance.
     *
     * @example 10.140.xxx.xx
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The endpoint of the instance.
     *
     * @example s-bpxxxxxxxx.mongodb.rds.aliyuncs.com
     *
     * @var string
     */
    public $networkAddress;

    /**
     * @description The network type. Valid values:
     *
     * - **VPC**
     * - **Classic**
     * - **Public**: pubic endpoint
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The ID of the mongos.
     *
     * @example s-bpxxxxxxxx
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The type of the node. Valid values:
     *
     * - **mongos**
     * - **shard**
     * - **configserver**
     * @example mongos
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The port number.
     *
     * @example 3717
     *
     * @var string
     */
    public $port;

    /**
     * @description The role of the node. Valid values:
     *
     * - Secondary
     * @example Primary
     *
     * @var string
     */
    public $role;

    /**
     * @description The ID of the VPC.
     *
     * >  This parameter is returned when the network type is **VPC**.
     * @example vpc-bpxxxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the VPC.
     *
     * >  This parameter is returned when the network type is **VPC**.
     * @example vsw-bpxxxxxxxx
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'expiredTime'    => 'ExpiredTime',
        'IPAddress'      => 'IPAddress',
        'networkAddress' => 'NetworkAddress',
        'networkType'    => 'NetworkType',
        'nodeId'         => 'NodeId',
        'nodeType'       => 'NodeType',
        'port'           => 'Port',
        'role'           => 'Role',
        'VPCId'          => 'VPCId',
        'vswitchId'      => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->networkAddress) {
            $res['NetworkAddress'] = $this->networkAddress;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['NetworkAddress'])) {
            $model->networkAddress = $map['NetworkAddress'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
