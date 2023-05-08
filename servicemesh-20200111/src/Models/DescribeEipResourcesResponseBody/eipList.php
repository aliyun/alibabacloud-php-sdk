<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeEipResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class eipList extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-2zeerraiwb7ujxscd****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The type of the resource that is associated with the EIP. Valid values:
     *
     *   `EcsInstance`: an ECS instance in a VPC
     *   `SlbInstance`: a Server Load Balancer (SLB) instance in a VPC
     *   `Nat`: a NAT gateway
     *   `HaVip`: a high-availability virtual IP address (HAVIP)
     *   `NetworkInterface`: a secondary elastic network interface (ENI)
     *
     * Default value: `EcsInstance`.
     * @example SlbInstance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The IP address of the EIP.
     *
     * @example 120.xx.xx.112
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The status of the EIP. Valid values:
     *
     *   `Associating`: The EIP is being associated with a resource.
     *   `Unassociating`: The EIP is being disassociated from a resource.
     *   `InUse`: The EIP is associated with a resource.
     *   `Available`: The EIP is available.
     *
     * @example InUse
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'instanceType' => 'InstanceType',
        'ipAddress'    => 'IpAddress',
        'status'       => 'Status',
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
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
