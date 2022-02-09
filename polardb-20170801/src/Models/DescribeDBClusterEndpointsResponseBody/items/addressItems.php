<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponseBody\items;

use AlibabaCloud\Tea\Model;

class addressItems extends Model
{
    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $IPAddress;

    /**
     * @var string
     */
    public $netType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $privateZoneConnectionString;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
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
