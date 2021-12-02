<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\backendServers;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\publicIpAddresses;
use AlibabaCloud\Tea\Model;

class globalAccelerationInstance extends Model
{
    /**
     * @var string
     */
    public $accelerationLocation;

    /**
     * @var backendServers
     */
    public $backendServers;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $bandwidthType;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $globalAccelerationInstanceId;

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
    public $name;

    /**
     * @var publicIpAddresses
     */
    public $publicIpAddresses;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceLocation;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accelerationLocation'         => 'AccelerationLocation',
        'backendServers'               => 'BackendServers',
        'bandwidth'                    => 'Bandwidth',
        'bandwidthType'                => 'BandwidthType',
        'chargeType'                   => 'ChargeType',
        'creationTime'                 => 'CreationTime',
        'description'                  => 'Description',
        'expiredTime'                  => 'ExpiredTime',
        'globalAccelerationInstanceId' => 'GlobalAccelerationInstanceId',
        'internetChargeType'           => 'InternetChargeType',
        'ipAddress'                    => 'IpAddress',
        'name'                         => 'Name',
        'publicIpAddresses'            => 'PublicIpAddresses',
        'regionId'                     => 'RegionId',
        'serviceLocation'              => 'ServiceLocation',
        'status'                       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerationLocation) {
            $res['AccelerationLocation'] = $this->accelerationLocation;
        }
        if (null !== $this->backendServers) {
            $res['BackendServers'] = null !== $this->backendServers ? $this->backendServers->toMap() : null;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthType) {
            $res['BandwidthType'] = $this->bandwidthType;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->globalAccelerationInstanceId) {
            $res['GlobalAccelerationInstanceId'] = $this->globalAccelerationInstanceId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publicIpAddresses) {
            $res['PublicIpAddresses'] = null !== $this->publicIpAddresses ? $this->publicIpAddresses->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceLocation) {
            $res['ServiceLocation'] = $this->serviceLocation;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalAccelerationInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerationLocation'])) {
            $model->accelerationLocation = $map['AccelerationLocation'];
        }
        if (isset($map['BackendServers'])) {
            $model->backendServers = backendServers::fromMap($map['BackendServers']);
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthType'])) {
            $model->bandwidthType = $map['BandwidthType'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GlobalAccelerationInstanceId'])) {
            $model->globalAccelerationInstanceId = $map['GlobalAccelerationInstanceId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublicIpAddresses'])) {
            $model->publicIpAddresses = publicIpAddresses::fromMap($map['PublicIpAddresses']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceLocation'])) {
            $model->serviceLocation = $map['ServiceLocation'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
