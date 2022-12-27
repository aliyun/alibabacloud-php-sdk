<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesResponseBody\eipAddresses;

use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @example eip-5sainglpw7qfem3icir4s****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @example 1624885274000
     *
     * @var string
     */
    public $allocationTime;

    /**
     * @example 50
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example example
     *
     * @var string
     */
    public $description;

    /**
     * @example cn-xian-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example lb-5sc3kum2e0sz34wbqrws9****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example SlbInstance
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 95BandwidthByMonth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @example 10.10.10
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
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
        'isp'                => 'Isp',
        'name'               => 'Name',
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
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
