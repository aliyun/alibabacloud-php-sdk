<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeDBInstanceNetInfoResponseBody\netInfoItems;

use AlibabaCloud\Tea\Model;

class instanceNetInfo extends Model
{
    /**
     * @var string
     */
    public $connectionString;

    /**
     * @var string
     */
    public $DBInstanceNetType;

    /**
     * @var int
     */
    public $directConnection;

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
    public $IPType;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $upgradeable;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $VPCInstanceId;

    /**
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
