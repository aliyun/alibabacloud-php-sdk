<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AssociateEnsEipAddressRequest extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * This parameter is required.
     * @example eip-5sc1sgcrsrwgwdvx44hru3p63
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The ID of the cloud service with which you want to associate the EIP.
     *
     * This parameter is required.
     * @example lb-5saivuir6b1mupxjfbhmk1xkb
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of instance with which you want to associate the EIP. Valid values:
     *
     *   **Nat**: a NAT gateway.
     *   **SlbInstance**: an ELB instance.
     *   **NetworkInterface**: a secondary ENI.
     *   **NatSlbInstance**: If you want to associate multiple EIPs to an ELB instance, you need to set the parameter to this value.
     *   **EnsInstance** (default): an ENS instance.
     *
     * @example SlbInstance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description Specifies whether the EIP is a secondary EIP. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $standby;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'standby'      => 'Standby',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->standby) {
            $res['Standby'] = $this->standby;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateEnsEipAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Standby'])) {
            $model->standby = $map['Standby'];
        }

        return $model;
    }
}
