<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class SwitchDBInstanceVpcRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * >
     *
     *   The instance must run one of the following database engines:
     *
     * - PostgreSQL with standard SSDs or ESSDs
     *
     *   The instance must be in the Running state.
     *   The instance must reside in a VPC.
     *   The instance cannot be a temporary instance or use an instance type that belongs to the shared instance family.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The private IP address of the instance. The private IP address must be within the CIDR block of the vSwitch that is specified by the **VSwitchId** parameter.
     *
     * > You can call the [DescribeVSwitches](~~35748~~) operation to query the CIDR block of a specified vSwitch.
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
     * @description The ID of the VPC.
     *
     * > The VPC must belong to the same region as the instance.
     * @example vpc-uf6f7l4fg90*****
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description The ID of the vSwitch.
     *
     * > The vSwitch must belong to the same zone as the instance.
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
