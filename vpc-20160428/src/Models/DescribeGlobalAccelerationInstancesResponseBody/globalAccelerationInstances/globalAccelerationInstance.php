<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\backendServers;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\publicIpAddresses;
use AlibabaCloud\Tea\Model;

class globalAccelerationInstance extends Model
{
    /**
     * @description The acceleration area of the GA instance.
     *
     * @example china-mainland
     *
     * @var string
     */
    public $accelerationLocation;

    /**
     * @description The details about the backend servers of the GA instance.
     *
     * @var backendServers
     */
    public $backendServers;

    /**
     * @description The maximum bandwidth of the GA instance.
     *
     * @example 10
     *
     * @var string
     */
    public $bandwidth;

    /**
     * @description The bandwidth type of the GA instance.
     *
     *   **Sharing**
     *   **Exclusive** (default)
     *
     * @example Exclusive
     *
     * @var string
     */
    public $bandwidthType;

    /**
     * @description The billing method of the GA instance.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The time when the GA instance was created. The time is displayed in UTC.
     *
     * @example 2018-07-05T03:39:31Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the GA instance.
     *
     * @example apiDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the instance expires.
     *
     * @example 2018-08-05T16:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1x99kj7kl1ziw5x****
     *
     * @var string
     */
    public $globalAccelerationInstanceId;

    /**
     * @description The billing method of the GA instance.
     *
     * @example PayByBandwidth
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The public IP address of the dedicated GA instance.
     *
     * @example 47.xx.xx.99
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The name of the GA instance.
     *
     * @example instanceName
     *
     * @var string
     */
    public $name;

    /**
     * @description The public IP address.
     *
     * @var publicIpAddresses
     */
    public $publicIpAddresses;

    /**
     * @description The region ID of the GA instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The service area of the GA instance.
     *
     * @example china-mainland
     *
     * @var string
     */
    public $serviceLocation;

    /**
     * @description The status of the GA instance.
     *
     *   **Available**
     *   **Inuse**
     *   **Associating**
     *   **Unassociating**
     *
     * @example InUse
     *
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
