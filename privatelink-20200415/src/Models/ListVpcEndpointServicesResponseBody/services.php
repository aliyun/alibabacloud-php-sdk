<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesResponseBody;

use AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointServicesResponseBody\services\tags;
use AlibabaCloud\Tea\Model;

class services extends Model
{
    /**
     * @description Indicates whether endpoint connection requests are automatically accepted. Valid values:
     *
     *   **true**: Endpoint connection requests are automatically accepted.
     *   **false**: Endpoint connection requests are not automatically accepted.
     *
     * @example true
     *
     * @var bool
     */
    public $autoAcceptEnabled;

    /**
     * @description The default maximum bandwidth of the endpoint connection. Unit: Mbit/s.
     *
     * @example 1024
     *
     * @var int
     */
    public $connectBandwidth;

    /**
     * @description The time when the endpoint service was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-09-24T17:15:10Z
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
     * @description The payer. Valid values:
     *
     *   **Endpoint**: service consumer
     *   **EndpointService**: service provider
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
     * @description The ID of the resource group.
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
     *   **FinancialLocked**: The endpoint service is locked due to overdue payments.
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
     * @description The ID of the endpoint service.
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
     *   **slb**: Classic Load Balancer (CLB) instance
     *   **alb**: Application Load Balancer (ALB) instance
     *   **nlb**: Network Load Balancer (NLB) instance
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
     *
     * @example Active
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @description Indicates whether the endpoint service supports IPv6. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $serviceSupportIPv6;

    /**
     * @description The type of the endpoint service.
     *
     *   Only **Interface** may be returned. You can specify CLB, ALB, and NLB instances as the service resources of the endpoint service.
     *
     * @example Interface
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The tags added to the resource.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description Indicates whether zone affinity is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $zoneAffinityEnabled;
    protected $_name = [
        'autoAcceptEnabled'     => 'AutoAcceptEnabled',
        'connectBandwidth'      => 'ConnectBandwidth',
        'createTime'            => 'CreateTime',
        'maxBandwidth'          => 'MaxBandwidth',
        'minBandwidth'          => 'MinBandwidth',
        'payer'                 => 'Payer',
        'regionId'              => 'RegionId',
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
        'tags'                  => 'Tags',
        'zoneAffinityEnabled'   => 'ZoneAffinityEnabled',
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneAffinityEnabled) {
            $res['ZoneAffinityEnabled'] = $this->zoneAffinityEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return services
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }

        return $model;
    }
}
