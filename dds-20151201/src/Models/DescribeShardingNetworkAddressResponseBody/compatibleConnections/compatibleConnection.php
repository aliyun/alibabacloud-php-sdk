<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\compatibleConnections;

use AlibabaCloud\Tea\Model;

class compatibleConnection extends Model
{
    /**
     * @var string
     */
    public $vswitchId;

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
    public $port;

    /**
     * @var string
     */
    public $networkAddress;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $IPAddress;
    protected $_name = [
        'vswitchId'      => 'VswitchId',
        'expiredTime'    => 'ExpiredTime',
        'networkType'    => 'NetworkType',
        'port'           => 'Port',
        'networkAddress' => 'NetworkAddress',
        'VPCId'          => 'VPCId',
        'IPAddress'      => 'IPAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->networkAddress) {
            $res['NetworkAddress'] = $this->networkAddress;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
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
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['NetworkAddress'])) {
            $model->networkAddress = $map['NetworkAddress'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }

        return $model;
    }
}
