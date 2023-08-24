<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponseBody\netInfoItems;

use AlibabaCloud\Tea\Model;

class instanceNetInfo extends Model
{
    /**
     * @description Indicates whether the address is a private endpoint. Valid values:
     *
     *   **0**: no.
     *   **1**: yes.
     *
     * @example r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The endpoint of the instance.
     *
     * @example 1
     *
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeDBInstanceNetInfo**.
     *
     * @example 0
     *
     * @var int
     */
    public $directConnection;

    /**
     * @description The expiration time of the classic network address of an ApsaraDB for Redis instance. Unit: seconds.
     *
     * @example 5183779
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example 172.16.49.***
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The network type of the IP address. Valid values:
     *
     *   **Public**: Internet.
     *   **Inner**: classic network.
     *   **Private**: VPC.
     *
     * @example Inner
     *
     * @var string
     */
    public $IPType;

    /**
     * @description The network type of the endpoint. Valid values:
     *
     *   **0**: the Internet.
     *   **1**: classic network.
     *   **2**: VPC.
     *
     * @example 6379
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the instance.
     *
     * @example 0
     *
     * @var string
     */
    public $upgradeable;

    /**
     * @description Queries the network information about an ApsaraDB for Redis instance.
     *
     * @example vpc-bp1nme44gek34slfc****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The list of network information about the instance.
     *
     * @example r-bp1ky7j6qc7umk****
     *
     * @var string
     */
    public $VPCInstanceId;

    /**
     * @description The ID of the instance.
     *
     * @example vsw-bp1e7clcw529l773d****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'connectionString'  => 'ConnectionString',
        'DBInstanceNetType' => 'DBInstanceNetType',
        'directConnection'  => 'DirectConnection',
        'expiredTime'       => 'ExpiredTime',
        'IPAddress'         => 'IPAddress',
        'IPType'            => 'IPType',
        'port'              => 'Port',
        'upgradeable'       => 'Upgradeable',
        'VPCId'             => 'VPCId',
        'VPCInstanceId'     => 'VPCInstanceId',
        'vSwitchId'         => 'VSwitchId',
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
        if (null !== $this->DBInstanceNetType) {
            $res['DBInstanceNetType'] = $this->DBInstanceNetType;
        }
        if (null !== $this->directConnection) {
            $res['DirectConnection'] = $this->directConnection;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->upgradeable) {
            $res['Upgradeable'] = $this->upgradeable;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->VPCInstanceId) {
            $res['VPCInstanceId'] = $this->VPCInstanceId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceNetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['DBInstanceNetType'])) {
            $model->DBInstanceNetType = $map['DBInstanceNetType'];
        }
        if (isset($map['DirectConnection'])) {
            $model->directConnection = $map['DirectConnection'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Upgradeable'])) {
            $model->upgradeable = $map['Upgradeable'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['VPCInstanceId'])) {
            $model->VPCInstanceId = $map['VPCInstanceId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
