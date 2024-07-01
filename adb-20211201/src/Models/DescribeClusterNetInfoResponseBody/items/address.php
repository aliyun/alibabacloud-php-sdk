<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody\items;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeClusterNetInfoResponseBody\items\address\ports;
use AlibabaCloud\Tea\Model;

class address extends Model
{
    /**
     * @description The endpoint of the cluster.
     *
     *   If the network type of the cluster is VPC, the VPC endpoint of the cluster is returned.
     *   If the network type of the cluster is Public, the public endpoint of the cluster is returned.
     *
     * @example amv-wz9dqvn0o7****.ads.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The prefix of the endpoint.
     *
     *   If the network type of the cluster is VPC, the prefix of the private endpoint is returned.
     *   If the network type of the cluster is Public, the prefix of the public endpoint is returned.
     *
     * @example amv-wz9dqvn0o7****
     *
     * @var string
     */
    public $connectionStringPrefix;

    /**
     * @description The IP address of the endpoint.
     *
     *   If the network type of the cluster is VPC, the IP address of the private endpoint is returned.
     *   If the network type of the cluster is Public, the IP address of the public endpoint is returned.
     *
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The network type of the cluster. Valid values:
     *
     *   **Public**: Internet.
     *   **VPC**: VPC.
     *
     * @example VPC
     *
     * @var string
     */
    public $netType;

    /**
     * @description The port number that is used to connect to the cluster. **3306** is returned.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @var ports
     */
    public $ports;

    /**
     * @description The VPC ID.
     *
     * > If NetType is set to Public, an empty string is returned for this parameter.
     * @example vpc-8vbhucmd5b****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the cluster.
     *
     * > If NetType is set to Public, an empty string is returned for this parameter.
     * @example vsw-bp1syh8vvw8yec****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectionString'       => 'ConnectionString',
        'connectionStringPrefix' => 'ConnectionStringPrefix',
        'IPAddress'              => 'IPAddress',
        'netType'                => 'NetType',
        'port'                   => 'Port',
        'ports'                  => 'Ports',
        'VPCId'                  => 'VPCId',
        'vSwitchId'              => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->connectionStringPrefix) {
            $res['ConnectionStringPrefix'] = $this->connectionStringPrefix;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->ports) {
            $res['Ports'] = null !== $this->ports ? $this->ports->toMap() : null;
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
     * @return address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['ConnectionStringPrefix'])) {
            $model->connectionStringPrefix = $map['ConnectionStringPrefix'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Ports'])) {
            $model->ports = ports::fromMap($map['Ports']);
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
