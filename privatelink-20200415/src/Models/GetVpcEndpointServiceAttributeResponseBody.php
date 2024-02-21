<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class GetVpcEndpointServiceAttributeResponseBody extends Model
{
    /**
     * @description Indicates whether endpoint connection requests are automatically accepted. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $autoAcceptEnabled;

    /**
     * @description The default maximum bandwidth of the endpoint connection. Unit: Mbit/s. Valid values: **100** to 10240.
     *
     * @example 1024
     *
     * @var int
     */
    public $connectBandwidth;

    /**
     * @description The time when the endpoint service was created.
     *
     * @example 2020-01-02T19:11:12Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The maximum bandwidth of the endpoint connection. Unit: Mbit/s.
     *
     * @example 1024
     *
     * @var int
     */
    public $maxBandwidth;

    /**
     * @description The minimum bandwidth of the endpoint connection. Unit: Mbit/s.
     *
     * @example 100
     *
     * @var int
     */
    public $minBandwidth;

    /**
     * @description The payer of the endpoint service. Valid values:
     *
     *   **Endpoint**: the service consumer.
     *   **EndpointService**: the service provider.
     *
     * @example Endpoint
     *
     * @var string
     */
    public $payer;

    /**
     * @description The region ID of the endpoint service.
     *
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The request ID.
     *
     * @example 8D8992C1-6712-423C-BAC5-E5E817484C6B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmy*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The service state of the endpoint service. Valid values:
     *
     *   **Normal**: The endpoint service runs as expected.
     *   **FinacialLocked**: The endpoint service is locked due to overdue payments.
     *
     * @example Normal
     *
     * @var string
     */
    public $serviceBusinessStatus;

    /**
     * @description The description of the endpoint service.
     *
     * @example This is my EndpointService.
     *
     * @var string
     */
    public $serviceDescription;

    /**
     * @description The domain name of the endpoint service.
     *
     * @example epsrv-hp3vpx8yqxblby3i****.cn-huhehaote.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $serviceDomain;

    /**
     * @description The endpoint service ID.
     *
     * @example epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The name of the endpoint service.
     *
     * @example com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The type of the service resource. Valid values:
     *
     *   **slb**: a CLB instance.
     *   **alb**: an ALB instance.
     *
     * @example slb
     *
     * @var string
     */
    public $serviceResourceType;

    /**
     * @description The state of the endpoint service. Valid values:
     *
     *   **Creating**: The endpoint service is being created.
     *   **Pending**: The endpoint service is being modified.
     *   **Active**: The endpoint service is available.
     *   **Deleting**: The endpoint service is being deleted.
     *   **Inactive**: The endpoint service is unavailable.
     *
     * @example Active
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @description Indicates whether IPv6 is enabled for the endpoint service. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var bool
     */
    public $serviceSupportIPv6;

    /**
     * @description The type of the endpoint.
     *
     * Only **Interface** is returned. The value indicates the interface endpoint. Then, you can specify ALB and CLB instances as service resources for the endpoint service.
     * @example Interface
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description Indicates whether the domain name of the nearest endpoint that is associated with the endpoint service is resolved first. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $zoneAffinityEnabled;

    /**
     * @description The zones to which the service resources belong.
     *
     * @var string[]
     */
    public $zones;
    protected $_name = [
        'autoAcceptEnabled'     => 'AutoAcceptEnabled',
        'connectBandwidth'      => 'ConnectBandwidth',
        'createTime'            => 'CreateTime',
        'maxBandwidth'          => 'MaxBandwidth',
        'minBandwidth'          => 'MinBandwidth',
        'payer'                 => 'Payer',
        'regionId'              => 'RegionId',
        'requestId'             => 'RequestId',
        'resourceGroupId'       => 'ResourceGroupId',
        'serviceBusinessStatus' => 'ServiceBusinessStatus',
        'serviceDescription'    => 'ServiceDescription',
        'serviceDomain'         => 'ServiceDomain',
        'serviceId'             => 'ServiceId',
        'serviceName'           => 'ServiceName',
        'serviceResourceType'   => 'ServiceResourceType',
        'serviceStatus'         => 'ServiceStatus',
        'serviceSupportIPv6'    => 'ServiceSupportIPv6',
        'serviceType'           => 'ServiceType',
        'zoneAffinityEnabled'   => 'ZoneAffinityEnabled',
        'zones'                 => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoAcceptEnabled) {
            $res['AutoAcceptEnabled'] = $this->autoAcceptEnabled;
        }
        if (null !== $this->connectBandwidth) {
            $res['ConnectBandwidth'] = $this->connectBandwidth;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
        }
        if (null !== $this->minBandwidth) {
            $res['MinBandwidth'] = $this->minBandwidth;
        }
        if (null !== $this->payer) {
            $res['Payer'] = $this->payer;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceBusinessStatus) {
            $res['ServiceBusinessStatus'] = $this->serviceBusinessStatus;
        }
        if (null !== $this->serviceDescription) {
            $res['ServiceDescription'] = $this->serviceDescription;
        }
        if (null !== $this->serviceDomain) {
            $res['ServiceDomain'] = $this->serviceDomain;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceResourceType) {
            $res['ServiceResourceType'] = $this->serviceResourceType;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceSupportIPv6) {
            $res['ServiceSupportIPv6'] = $this->serviceSupportIPv6;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->zoneAffinityEnabled) {
            $res['ZoneAffinityEnabled'] = $this->zoneAffinityEnabled;
        }
        if (null !== $this->zones) {
            $res['Zones'] = $this->zones;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVpcEndpointServiceAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoAcceptEnabled'])) {
            $model->autoAcceptEnabled = $map['AutoAcceptEnabled'];
        }
        if (isset($map['ConnectBandwidth'])) {
            $model->connectBandwidth = $map['ConnectBandwidth'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
        }
        if (isset($map['MinBandwidth'])) {
            $model->minBandwidth = $map['MinBandwidth'];
        }
        if (isset($map['Payer'])) {
            $model->payer = $map['Payer'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceBusinessStatus'])) {
            $model->serviceBusinessStatus = $map['ServiceBusinessStatus'];
        }
        if (isset($map['ServiceDescription'])) {
            $model->serviceDescription = $map['ServiceDescription'];
        }
        if (isset($map['ServiceDomain'])) {
            $model->serviceDomain = $map['ServiceDomain'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceResourceType'])) {
            $model->serviceResourceType = $map['ServiceResourceType'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['ServiceSupportIPv6'])) {
            $model->serviceSupportIPv6 = $map['ServiceSupportIPv6'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = $map['Zones'];
            }
        }

        return $model;
    }
}
