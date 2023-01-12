<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class GetBasicEndpointResponseBody extends Model
{
    /**
     * @description The ID of the basic GA instance.
     *
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The ID of the endpoint that is associated with the basic GA instance.
     *
     * @example ep-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endPointId;

    /**
     * @description The address of the endpoint.
     *
     * @example eni-bp1a05txelswuj8g****
     *
     * @var string
     */
    public $endpointAddress;

    /**
     * @description The ID of the endpoint group to which the endpoint belongs.
     *
     * @example epg-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The secondary address of the endpoint.
     *
     * This parameter is returned if the endpoint type is set to **ECS**, **ENI**, or **NLB**.
     *
     *   If the endpoint type is set to **ECS**, **EndpointSubAddress** returns the secondary private IP address of the primary ENI or the primary private IP address of the primary ENI.
     *   If the endpoint type is set to **ENI**, **EndpointSubAddress** returns the secondary private IP address of the secondary ENI or the primary private IP address of the secondary ENI is used.
     *   If the endpoint type is set to **NLB**, **EndpointSubAddress** returns the primary private IP address of the backend server of the NLB instance.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $endpointSubAddress;

    /**
     * @description The type of the secondary address of the endpoint.
     *
     *   **primary:** primary private IP address
     *   **secondary:** secondary private IP address
     *
     * This parameter is returned if the type of the endpoint is set to **ECS**, **ENI**, or **NLB**. If the endpoint type is set to **NLB**, **primary**is returned.
     * @example primary
     *
     * @var string
     */
    public $endpointSubAddressType;

    /**
     * @description The type of endpoint. Valid values:
     *
     *   **ENI**: elastic network interface (ENI).
     *   **SLB**: Classic Load Balancer (CLB) instance.
     *   **ECS**: Elastic Compute Service (ECS) instance.
     *   **NLB**: Network Load Balancer (NLB) instance.
     *
     * @example ENI
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The ID of the zone where the endpoint is deployed.
     *
     * This parameter is returned only when the endpoint type is set to **NLB**.
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $endpointZoneId;

    /**
     * @description The name of the endpoint that is associated with the basic GA instance.
     *
     * @example ep01
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the endpoint. Valid values:
     *
     *   **init:** The endpoint is being initialized.
     *   **active:** The endpoint is available.
     *   **updating:** The endpoint is being configured.
     *   **binding:** The endpoint is being associated.
     *   **unbinding:** The endpoint is being disassociated.
     *   **deleting:** The endpoint is being deleted.
     *   **bound:** The endpoint is associated.
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'acceleratorId'          => 'AcceleratorId',
        'endPointId'             => 'EndPointId',
        'endpointAddress'        => 'EndpointAddress',
        'endpointGroupId'        => 'EndpointGroupId',
        'endpointSubAddress'     => 'EndpointSubAddress',
        'endpointSubAddressType' => 'EndpointSubAddressType',
        'endpointType'           => 'EndpointType',
        'endpointZoneId'         => 'EndpointZoneId',
        'name'                   => 'Name',
        'requestId'              => 'RequestId',
        'state'                  => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->endPointId) {
            $res['EndPointId'] = $this->endPointId;
        }
        if (null !== $this->endpointAddress) {
            $res['EndpointAddress'] = $this->endpointAddress;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointSubAddress) {
            $res['EndpointSubAddress'] = $this->endpointSubAddress;
        }
        if (null !== $this->endpointSubAddressType) {
            $res['EndpointSubAddressType'] = $this->endpointSubAddressType;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->endpointZoneId) {
            $res['EndpointZoneId'] = $this->endpointZoneId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBasicEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['EndPointId'])) {
            $model->endPointId = $map['EndPointId'];
        }
        if (isset($map['EndpointAddress'])) {
            $model->endpointAddress = $map['EndpointAddress'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointSubAddress'])) {
            $model->endpointSubAddress = $map['EndpointSubAddress'];
        }
        if (isset($map['EndpointSubAddressType'])) {
            $model->endpointSubAddressType = $map['EndpointSubAddressType'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['EndpointZoneId'])) {
            $model->endpointZoneId = $map['EndpointZoneId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
