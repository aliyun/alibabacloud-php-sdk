<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class GetVpcEndpointAttributeResponseBody extends Model
{
    /**
     * @description The bandwidth of the endpoint connection. Unit: Mbit/s.
     *
     * @example 1024
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The state of the endpoint connection. Valid values:
     *
     *   **Pending**: The connection is being modified.
     *   **Connecting**: The connection is being established.
     *   **Connected**: The connection is established.
     *   **Disconnecting**: The endpoint is being disconnected from the endpoint service.
     *   **Disconnected**: The endpoint is disconnected from the endpoint service.
     *   **Deleting**: The connection is being deleted.
     *
     * @example Connected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The time when the endpoint was created.
     *
     * @example 2021-09-24T18:00:07Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The service state of the endpoint. Valid values:
     *
     *   **Normal**: The endpoint runs as expected.
     *   **FinancialLocked**: The endpoint is locked due to overdue payments.
     *
     * @example Normal
     *
     * @var string
     */
    public $endpointBusinessStatus;

    /**
     * @description The description of the endpoint.
     *
     * @example This is my Endpoint.
     *
     * @var string
     */
    public $endpointDescription;

    /**
     * @description The domain name of the endpoint.
     *
     * @example ep-hp33b2e43fays7s8****.epsrv-hp3xdsq46ael67lo****.cn-huhehaote.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $endpointDomain;

    /**
     * @description The endpoint ID.
     *
     * @example ep-hp33b2e43fays7s8****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The name of the endpoint.
     *
     * @example test
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The state of the endpoint. Valid values:
     *
     *   **Creating**: The endpoint is being created.
     *   **Active**: The endpoint is available.
     *   **Pending**: The endpoint is being modified.
     *   **Deleting**: The endpoint is being deleted.
     *
     * @example Active
     *
     * @var string
     */
    public $endpointStatus;

    /**
     * @description The type of the endpoint.
     *
     **Interface** is returned. The value indicates the interface endpoint with which the Classic Load Balancer (CLB) instances are associated.
     *
     * @example Interface
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The payer. Valid values:
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
     * @var string
     */
    public $policyDocument;

    /**
     * @description The region ID of the endpoint.
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
     * @example rg-acfmz7nocpei***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Indicates whether the endpoint and the endpoint service belong to the same Alibaba Cloud account. Valid values:
     *
     *   **true**: The endpoint and the endpoint service belong to the same Alibaba Cloud account.
     *   **false**: The endpoint and the endpoint service do not belong to the same Alibaba Cloud account.
     *
     * @example true
     *
     * @var bool
     */
    public $resourceOwner;

    /**
     * @description The ID of the endpoint service with which the endpoint is associated.
     *
     * @example epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The name of the endpoint service with which the endpoint is associated.
     *
     * @example com.aliyuncs.privatelink.cn-huhehaote.epsrv-hp3xdsq46ael67lo****
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the endpoint belongs.
     *
     * @example vpc-fdfhkjafhjvcvdjf****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Indicates whether the domain name of the nearest endpoint that is associated with the endpoint service is resolved first. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $zoneAffinityEnabled;

    /**
     * @description The number of private IP addresses that are assigned to an elastic network interface (ENI) in each zone. Only **1** is returned.
     *
     * @example 1
     *
     * @var int
     */
    public $zonePrivateIpAddressCount;
    protected $_name = [
        'bandwidth'                 => 'Bandwidth',
        'connectionStatus'          => 'ConnectionStatus',
        'createTime'                => 'CreateTime',
        'endpointBusinessStatus'    => 'EndpointBusinessStatus',
        'endpointDescription'       => 'EndpointDescription',
        'endpointDomain'            => 'EndpointDomain',
        'endpointId'                => 'EndpointId',
        'endpointName'              => 'EndpointName',
        'endpointStatus'            => 'EndpointStatus',
        'endpointType'              => 'EndpointType',
        'payer'                     => 'Payer',
        'policyDocument'            => 'PolicyDocument',
        'regionId'                  => 'RegionId',
        'requestId'                 => 'RequestId',
        'resourceGroupId'           => 'ResourceGroupId',
        'resourceOwner'             => 'ResourceOwner',
        'serviceId'                 => 'ServiceId',
        'serviceName'               => 'ServiceName',
        'vpcId'                     => 'VpcId',
        'zoneAffinityEnabled'       => 'ZoneAffinityEnabled',
        'zonePrivateIpAddressCount' => 'ZonePrivateIpAddressCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endpointBusinessStatus) {
            $res['EndpointBusinessStatus'] = $this->endpointBusinessStatus;
        }
        if (null !== $this->endpointDescription) {
            $res['EndpointDescription'] = $this->endpointDescription;
        }
        if (null !== $this->endpointDomain) {
            $res['EndpointDomain'] = $this->endpointDomain;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointStatus) {
            $res['EndpointStatus'] = $this->endpointStatus;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->payer) {
            $res['Payer'] = $this->payer;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
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
        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneAffinityEnabled) {
            $res['ZoneAffinityEnabled'] = $this->zoneAffinityEnabled;
        }
        if (null !== $this->zonePrivateIpAddressCount) {
            $res['ZonePrivateIpAddressCount'] = $this->zonePrivateIpAddressCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVpcEndpointAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndpointBusinessStatus'])) {
            $model->endpointBusinessStatus = $map['EndpointBusinessStatus'];
        }
        if (isset($map['EndpointDescription'])) {
            $model->endpointDescription = $map['EndpointDescription'];
        }
        if (isset($map['EndpointDomain'])) {
            $model->endpointDomain = $map['EndpointDomain'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
        }
        if (isset($map['EndpointStatus'])) {
            $model->endpointStatus = $map['EndpointStatus'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['Payer'])) {
            $model->payer = $map['Payer'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
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
        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneAffinityEnabled'])) {
            $model->zoneAffinityEnabled = $map['ZoneAffinityEnabled'];
        }
        if (isset($map['ZonePrivateIpAddressCount'])) {
            $model->zonePrivateIpAddressCount = $map['ZonePrivateIpAddressCount'];
        }

        return $model;
    }
}
