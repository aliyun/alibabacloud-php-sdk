<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponse\DBInstanceNetInfos;

use AlibabaCloud\Tea\Model;

class DBInstanceNetInfo extends Model
{
    /**
     * @var string
     */
    public $IPType;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcInstanceId;

    /**
     * @var string
     */
    public $addressType;

    /**
     * @var string
     */
    public $IPAddress;

    /**
     * @var string
     */
    public $connectionString;
    protected $_name = [
        'IPType'           => 'IPType',
        'VPCId'            => 'VPCId',
        'port'             => 'Port',
        'vSwitchId'        => 'VSwitchId',
        'vpcInstanceId'    => 'VpcInstanceId',
        'addressType'      => 'AddressType',
        'IPAddress'        => 'IPAddress',
        'connectionString' => 'ConnectionString',
    ];

    public function validate()
    {
        Model::validateRequired('IPType', $this->IPType, true);
        Model::validateRequired('VPCId', $this->VPCId, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('vpcInstanceId', $this->vpcInstanceId, true);
        Model::validateRequired('addressType', $this->addressType, true);
        Model::validateRequired('IPAddress', $this->IPAddress, true);
        Model::validateRequired('connectionString', $this->connectionString, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPType) {
            $res['IPType'] = $this->IPType;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcInstanceId) {
            $res['VpcInstanceId'] = $this->vpcInstanceId;
        }
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->IPAddress) {
            $res['IPAddress'] = $this->IPAddress;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
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
        if (isset($map['IPType'])) {
            $model->IPType = $map['IPType'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcInstanceId'])) {
            $model->vpcInstanceId = $map['VpcInstanceId'];
        }
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['IPAddress'])) {
            $model->IPAddress = $map['IPAddress'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
        }

        return $model;
    }
}
