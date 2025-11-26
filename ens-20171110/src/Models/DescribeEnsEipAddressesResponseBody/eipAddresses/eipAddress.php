<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesResponseBody\eipAddresses;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsEipAddressesResponseBody\eipAddresses\eipAddress\tags;

class eipAddress extends Model
{
    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $allocationTime;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var bool
     */
    public $icmpReplyEnabled;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $ipStatus;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $standby;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'allocationTime' => 'AllocationTime',
        'bandwidth' => 'Bandwidth',
        'chargeType' => 'ChargeType',
        'description' => 'Description',
        'ensRegionId' => 'EnsRegionId',
        'icmpReplyEnabled' => 'IcmpReplyEnabled',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'internetChargeType' => 'InternetChargeType',
        'ipAddress' => 'IpAddress',
        'ipStatus' => 'IpStatus',
        'isp' => 'Isp',
        'name' => 'Name',
        'standby' => 'Standby',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->icmpReplyEnabled) {
            $res['IcmpReplyEnabled'] = $this->icmpReplyEnabled;
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

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['IcmpReplyEnabled'])) {
            $model->icmpReplyEnabled = $map['IcmpReplyEnabled'];
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

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
