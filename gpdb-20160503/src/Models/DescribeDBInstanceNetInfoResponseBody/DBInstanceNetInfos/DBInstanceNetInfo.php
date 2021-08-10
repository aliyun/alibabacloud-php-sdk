<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;

use AlibabaCloud\Tea\Model;

class DBInstanceNetInfo extends Model
{
    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $connectionString;

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
    public $vpcInstanceId;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $IPAddress;

    /**
     * @var string
     */
    public $addressType;
    protected $_name = [
        'vSwitchId'        => 'VSwitchId',
        'connectionString' => 'ConnectionString',
        'IPType'           => 'IPType',
        'port'             => 'Port',
        'vpcInstanceId'    => 'VpcInstanceId',
        'VPCId'            => 'VPCId',
        'IPAddress'        => 'IPAddress',
        'addressType'      => 'AddressType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
        }
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceNetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }

        return $model;
    }
}
