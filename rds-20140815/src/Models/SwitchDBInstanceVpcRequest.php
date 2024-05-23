<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class SwitchDBInstanceVpcRequest extends Model
{
    /**
     * @description The instance ID. You can call the DescribeDBInstances operation to query the instance ID.
     *
     * This parameter is required.
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The private IP address of the instance. The private IP address must be within the CIDR block of the vSwitch that is specified by the **VSwitchId** parameter.
     *
     * >  You can call the DescribeVSwitches operation to query the CIDR block of the vSwitch.
     * @example 10.23.XX.XX
     *
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The VPC ID.
     *
     * This parameter is required.
     * @example vpc-uf6f7l4fg90*****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The vSwitch ID of the instance.
     *
     * This parameter is required.
     * @example vsw-uf6adz52c2p*****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'DBInstanceId'     => 'DBInstanceId',
        'privateIpAddress' => 'PrivateIpAddress',
        'resourceOwnerId'  => 'ResourceOwnerId',
        'VPCId'            => 'VPCId',
        'vSwitchId'        => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
     * @return SwitchDBInstanceVpcRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
