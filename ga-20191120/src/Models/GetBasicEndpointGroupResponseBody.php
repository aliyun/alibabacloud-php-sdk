<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class GetBasicEndpointGroupResponseBody extends Model
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
     * @description The description of the endpoint group.
     *
     * @example BasicEndpointGroup
     *
     * @var string
     */
    public $description;

    /**
     * @description The address of the endpoint.
     *
     * @example eni-bp1a05txelswuj8g****
     *
     * @var string
     */
    public $endpointAddress;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The ID of the region where the endpoint group resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @description The secondary address of the endpoint.
     *
     * This parameter is returned if the endpoint type is **ECS**, **ENI**, or **NLB**.
     *
     *   If the endpoint type is **ECS**, **EndpointSubAddress** returns the primary or secondary private IP address of the primary ENI.
     *   If the endpoint type is **ENI**, **EndpointSubAddress** returns the primary or secondary private IP address of the secondary ENI.
     *   If the endpoint type is **NLB**, **EndpointSubAddress** returns the primary private IP address of the NLB backend server.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $endpointSubAddress;

    /**
     * @description The type of endpoint. Valid values:
     *
     *   **ENI**: elastic network interface (ENI).
     *   **SLB**: Classic Load Balancer (CLB) instance.
     *   **ECS**: Elastic Compute Service (ECS) instance.
     *   **NLB**: Network Load Balancer (NLB) instance
     *
     * @example ENI
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The name of the endpoint group.
     *
     * @example group1
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
     * @description The status of the endpoint group. Valid values:
     *
     *   **init**: being initialized.
     *   **active**: running as expected.
     *   **updating**: being updated.
     *   **deleting**: being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'acceleratorId'       => 'AcceleratorId',
        'description'         => 'Description',
        'endpointAddress'     => 'EndpointAddress',
        'endpointGroupId'     => 'EndpointGroupId',
        'endpointGroupRegion' => 'EndpointGroupRegion',
        'endpointSubAddress'  => 'EndpointSubAddress',
        'endpointType'        => 'EndpointType',
        'name'                => 'Name',
        'requestId'           => 'RequestId',
        'state'               => 'State',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpointAddress) {
            $res['EndpointAddress'] = $this->endpointAddress;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->endpointSubAddress) {
            $res['EndpointSubAddress'] = $this->endpointSubAddress;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
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
     * @return GetBasicEndpointGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndpointAddress'])) {
            $model->endpointAddress = $map['EndpointAddress'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['EndpointSubAddress'])) {
            $model->endpointSubAddress = $map['EndpointSubAddress'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
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
