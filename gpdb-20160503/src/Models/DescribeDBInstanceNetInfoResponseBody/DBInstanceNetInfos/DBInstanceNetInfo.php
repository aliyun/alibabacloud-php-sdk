<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceNetInfoResponseBody\DBInstanceNetInfos;

use AlibabaCloud\Tea\Model;

class DBInstanceNetInfo extends Model
{
    /**
     * @description The IP address type of the instance.
     *
     * @example Intranet
     *
     * @var string
     */
    public $addressType;

    /**
     * @description The endpoint used to connect to the instance.
     *
     * @example gp-xxxxxxx.gpdb.rds.aliyuncs.com
     *
     * @var string
     */
    public $connectionString;

    /**
     * @description The IP address of the instance.
     *
     * @example 127.0.0.1
     *
     * @var string
     */
    public $IPAddress;

    /**
     * @description The type of IP address.
     *
     *   Valid values for instances in the classic network: Inner and Public
     *   Valid values for instances in a virtual private cloud (VPC): Private and Public
     *
     * @example Inner
     *
     * @var string
     */
    public $IPType;

    /**
     * @description The port number used to connect to the instance.
     *
     * @example 3432
     *
     * @var string
     */
    public $port;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-xxxxxxx
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch. Multiple IDs are separated by commas (,).
     *
     * @example vsw-xxxxxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-xxxxxxx
     *
     * @var string
     */
    public $vpcInstanceId;
    protected $_name = [
        'addressType'      => 'AddressType',
        'connectionString' => 'ConnectionString',
        'IPAddress'        => 'IPAddress',
        'IPType'           => 'IPType',
        'port'             => 'Port',
        'VPCId'            => 'VPCId',
        'vSwitchId'        => 'VSwitchId',
        'vpcInstanceId'    => 'VpcInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressType) {
            $res['AddressType'] = $this->addressType;
        }
        if (null !== $this->connectionString) {
            $res['ConnectionString'] = $this->connectionString;
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
     * @return DBInstanceNetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressType'])) {
            $model->addressType = $map['AddressType'];
        }
        if (isset($map['ConnectionString'])) {
            $model->connectionString = $map['ConnectionString'];
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
