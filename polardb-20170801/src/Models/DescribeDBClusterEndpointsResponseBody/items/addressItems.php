<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponseBody\items;

use AlibabaCloud\Tea\Model;

class addressItems extends Model
{
    /**
     * @description The endpoint.
     *
     * @example ********.rwlb.polardb-pg-public.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The IP address.
     *
     * @example 192.***.***.***
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The network type of the endpoint. Valid values:
     *
     *   **Public**
     *   **Private**
     *
     * @example Private
     *
     * @var string
     */
    public $netType;

    /**
     * @description The port.
     *
     * @example 1521
     *
     * @var string
     */
    public $port;

    /**
     * @description The private domain name that is bound to the endpoint.
     *
     * @example ***.***.**.com
     *
     * @var string
     */
    public $privateZoneConnectionString;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-***************
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-************
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC) instance.
     *
     * > This parameter is returned for only PolarDB for MySQL clusters.
     * @example pe-*************
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'connectionString'            => 'ConnectionString',
        'IPAddress'                   => 'IPAddress',
        'netType'                     => 'NetType',
        'port'                        => 'Port',
        'privateZoneConnectionString' => 'PrivateZoneConnectionString',
        'VPCId'                       => 'VPCId',
        'vSwitchId'                   => 'VSwitchId',
        'vpcInstanceId'               => 'VpcInstanceId',
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
        if (null !== $this->privateZoneConnectionString) {
            $res['PrivateZoneConnectionString'] = $this->privateZoneConnectionString;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
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
        if (isset($map['PrivateZoneConnectionString'])) {
            $model->privateZoneConnectionString = $map['PrivateZoneConnectionString'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }

        return $model;
    }
}
