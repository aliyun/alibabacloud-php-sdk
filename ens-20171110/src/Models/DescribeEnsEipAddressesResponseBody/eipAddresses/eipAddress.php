<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesResponseBody\eipAddresses;

use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-5sainglpw7qfem3icir4s****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The time when the EIP was created.
     *
     * @example 1624885274000
     *
     * @var string
     */
    public $allocationTime;

    /**
     * @description The peak bandwidth of the EIP. Default value: 5. Valid values: **5** to **10000**. Unit: Mbit/s.
     *
     * @example 50
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The billing method of the EIP. Valid values:
     *
     *   **PrePaid**: subscription.
     *   **PostPaid**: pay-as-you-go
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The description of the EIP.
     *
     * @example example
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the ENS node.
     *
     * @example cn-xian-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the instance that is associated with the EIP.
     *
     * @example lb-5sc3kum2e0sz34wbqrws9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the instance that is associated with the EIP. Valid values:
     *
     *   **EnsInstance**: ENS instance in a VPC
     *   **SlbInstance**: SLB instance
     *
     * @example SlbInstance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The metering method of the EIP.
     *
     *   **95BandwidthByMonth**: Pay by monthly 95th percentile bandwidth
     *   **PayByBandwidth**: Pay by bandwidth
     *
     * @example 95BandwidthByMonth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The EIP.
     *
     * @example 10.10.10
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The running status of the EIP. This parameter is returned if the EIP is a secondary EIP. Valid values:
     *
     *   **Stopped**
     *   **Running**
     *   **Starting**
     *   **Stopping**
     *
     * @example Stopped
     *
     * @var string
     */
    public $ipStatus;

    /**
     * @description The Internet service provider (ISP). Valid values:
     *
     *   **cmcc**: China Mobile
     *   **unicom**: China Unicom
     *   **telecom**: China Telecom
     *
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @description The name of the EIP.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether the EIP is a secondary EIP.
     *
     * @example true
     *
     * @var bool
     */
    public $standby;

    /**
     * @description The status of the EIP. Valid values:
     *
     *   **Associating**
     *   **Unassociating**
     *   **InUse**
     *   **Available**
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'allocationId'       => 'AllocationId',
        'allocationTime'     => 'AllocationTime',
        'bandwidth'          => 'Bandwidth',
        'chargeType'         => 'ChargeType',
        'description'        => 'Description',
        'ensRegionId'        => 'EnsRegionId',
        'instanceId'         => 'InstanceId',
        'instanceType'       => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'ipAddress'          => 'IpAddress',
        'ipStatus'           => 'IpStatus',
        'isp'                => 'Isp',
        'name'               => 'Name',
        'standby'            => 'Standby',
        'status'             => 'Status',
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
        if (null !== $this->allocationTime) {
            $res['AllocationTime'] = $this->allocationTime;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->ipStatus) {
            $res['IpStatus'] = $this->ipStatus;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->standby) {
            $res['Standby'] = $this->standby;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['AllocationTime'])) {
            $model->allocationTime = $map['AllocationTime'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['IpStatus'])) {
            $model->ipStatus = $map['IpStatus'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Standby'])) {
            $model->standby = $map['Standby'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
