<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponseBody\DBClusterEndpointList;

use AlibabaCloud\Tea\Model;

class addressItems extends Model
{
    /**
     * @description The connection string.
     *
     * @example pc-**************.rwlb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The IP address of the endpoint.
     *
     * @example 192.***.***.10
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The network type of the endpoint. Valid values:
     *
     *   **Public**: the public endpoint
     *   **Private**: the internal endpoint (VPC)
     *   **Inner**: the internal endpoint (classic network)
     *
     * @example Private
     *
     * @var string
     */
    public $netType;

    /**
     * @description The port number.
     *
     * @example 3306
     *
     * @var string
     */
    public $port;

    /**
     * @description Indicates whether SSL encryption is enabled. Valid values:
     *
     *   **Enabled**
     *   **Disabled**
     *
     * @example Enabled
     *
     * @var string
     */
    public $SSLEnabled;

    /**
     * @description The VPC ID.
     *
     * @example vpc-**********
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-**********
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectionString' => 'ConnectionString',
        'IPAddress'        => 'IPAddress',
        'netType'          => 'NetType',
        'port'             => 'Port',
        'SSLEnabled'       => 'SSLEnabled',
        'VPCId'            => 'VPCId',
        'vSwitchId'        => 'VSwitchId',
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
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
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
     * @return addressItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
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
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
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
