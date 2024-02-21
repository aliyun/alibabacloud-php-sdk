<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class CreateVpcEndpointResponseBody extends Model
{
    /**
     * @description The bandwidth of the endpoint connection. Unit: Mbit/s.
     *
     * @example 200
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
     * @example Disconnected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The time when the endpoint was created.
     *
     * @example 2022-01-02T19:11:12Z
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
     * @description The request ID.
     *
     * @example 0ED8D006-F706-4D23-88ED-E11ED28DCAC0
     *
     * @var string
     */
    public $requestId;

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
     * @description The ID of the VPC to which the endpoint belongs.
     *
     * @example vpc-hp356stwkxg3fn2xe****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'bandwidth'              => 'Bandwidth',
        'connectionStatus'       => 'ConnectionStatus',
        'createTime'             => 'CreateTime',
        'endpointBusinessStatus' => 'EndpointBusinessStatus',
        'endpointDescription'    => 'EndpointDescription',
        'endpointDomain'         => 'EndpointDomain',
        'endpointId'             => 'EndpointId',
        'endpointName'           => 'EndpointName',
        'endpointStatus'         => 'EndpointStatus',
        'requestId'              => 'RequestId',
        'serviceId'              => 'ServiceId',
        'serviceName'            => 'ServiceName',
        'vpcId'                  => 'VpcId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpcEndpointResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
