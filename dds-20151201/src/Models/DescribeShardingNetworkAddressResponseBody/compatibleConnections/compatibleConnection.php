<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\compatibleConnections;

use AlibabaCloud\Tea\Model;

class compatibleConnection extends Model
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
     * @example dds-bpxxxxxxxxxxxxxx.mongodb.rds.aliyuncs.com
     *
     * @var string
     */
    public $networkAddress;

    /**
     * @description The network type. Valid values:
     *
     *   **VPC**
     *   **Classic**
     *   **Public**: pubic endpoint
     *
     * @example VPC
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The port number.
     *
     * @example 3717
     *
     * @var string
     */
    public $port;

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
        'port'           => 'Port',
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
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
     * @return compatibleConnection
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
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
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
