<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcEndpointServiceResponseBody extends Model
{
    /**
     * @description Indicates whether the endpoint service automatically accepts endpoint connection requests. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $autoAcceptEnabled;

    /**
     * @description The time when the endpoint service was created.
     *
     * @example 2022-01-02T19:11:12Z
     *
     * @var string
     */
    public $createTime;

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
     * @description Indicates whether IPv6 was enabled for the endpoint service. Valid values:
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
     * @description Indicates whether the domain name of the nearest endpoint that is associated with the endpoint service is resolved first. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $zoneAffinityEnabled;
    protected $_name = [
        'autoAcceptEnabled'     => 'AutoAcceptEnabled',
        'createTime'            => 'CreateTime',
        'requestId'             => 'RequestId',
        'resourceGroupId'       => 'ResourceGroupId',
        'serviceBusinessStatus' => 'ServiceBusinessStatus',
        'serviceDescription'    => 'ServiceDescription',
        'serviceDomain'         => 'ServiceDomain',
        'serviceId'             => 'ServiceId',
        'serviceName'           => 'ServiceName',
        'serviceStatus'         => 'ServiceStatus',
        'serviceSupportIPv6'    => 'ServiceSupportIPv6',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceSupportIPv6) {
            $res['ServiceSupportIPv6'] = $this->serviceSupportIPv6;
        }
        if (null !== $this->zoneAffinityEnabled) {
            $res['ZoneAffinityEnabled'] = $this->zoneAffinityEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcEndpointServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoAcceptEnabled'])) {
            $model->autoAcceptEnabled = $map['AutoAcceptEnabled'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['ServiceSupportIPv6'])) {
            $model->serviceSupportIPv6 = $map['ServiceSupportIPv6'];
        }
        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }

        return $model;
    }
}
