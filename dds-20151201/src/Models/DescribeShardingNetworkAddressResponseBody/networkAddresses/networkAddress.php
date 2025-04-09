<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\networkAddresses;

use AlibabaCloud\Dara\Model;

class networkAddress extends Model
{
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
    public $IPAddress;

    /**
     * @var string
     */
    public $networkAddress;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $txtRecord;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'connectionType' => 'ConnectionType',
        'expiredTime' => 'ExpiredTime',
        'IPAddress' => 'IPAddress',
        'networkAddress' => 'NetworkAddress',
        'networkType' => 'NetworkType',
        'nodeId' => 'NodeId',
        'nodeType' => 'NodeType',
        'port' => 'Port',
        'role' => 'Role',
        'txtRecord' => 'TxtRecord',
        'VPCId' => 'VPCId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionType) {
            $res['ConnectionType'] = $this->connectionType;
        }

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

        if (null !== $this->txtRecord) {
            $res['TxtRecord'] = $this->txtRecord;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
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
        if (isset($map['ConnectionType'])) {
            $model->connectionType = $map['ConnectionType'];
        }

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

        if (isset($map['TxtRecord'])) {
            $model->txtRecord = $map['TxtRecord'];
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
