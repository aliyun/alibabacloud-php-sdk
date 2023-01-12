<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListBasicAccelerateIpEndpointRelationsResponseBody;

use AlibabaCloud\Tea\Model;

class accelerateIpEndpointRelations extends Model
{
    /**
     * @description The ID of the accelerated IP address.
     *
     * @example gaip-bp1****
     *
     * @var string
     */
    public $accelerateIpId;

    /**
     * @description The ID of the basic GA instance.
     *
     * @example ga-bp1miyl2kn2racucvegr5
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The address of the endpoint.
     *
     * @example eni-bp1a05txelswuj8g****
     *
     * @var string
     */
    public $endpointAddress;

    /**
     * @description The ID of the endpoint that is associated with the basic GA instance.
     *
     * @example ep-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The name of the endpoint that is associated with the basic GA instance.
     *
     * @example ep01
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The secondary address of the endpoint.
     *
     * This parameter is returned if the endpoint type is **ECS**, **ENI**, or **NLB**.
     *
     *   If the endpoint type is **ECS**, **EndpointSubAddress** returns the secondary private IP address of the primary ENI. If the parameter is empty, the primary private IP address of the primary ENI is returned.
     *   If the endpoint type is **ENI**, **EndpointSubAddress** returns the secondary private IP address of the secondary ENI. If the parameter is empty, the primary private IP address of the secondary ENI is returned.
     *   If the endpoint type is **NLB**, **EndpointSubAddress** returns the primary private IP address of the NLB backend server.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $endpointSubAddress;

    /**
     * @description The secondary address type of the endpoint.
     *
     *   **primary**: a primary private IP address.
     *   **secondary**: a secondary private IP address.
     *
     * This parameter is returned if the endpoint type is **ECS**, **ENI**, or **NLB**. If the endpoint type is **NLB**, only **primary** is returned.
     * @example primary
     *
     * @var string
     */
    public $endpointSubAddressType;

    /**
     * @description The type of endpoint.
     *
     *   **ENI**: elastic network interface (ENI)
     *   **SLB**: Classic Load Balancer (CLB) instance
     *   **ECS**: Elastic Compute Service (ECS) instance
     *   **NLB**: Network Load Balancer (NLB) instance
     *
     * @example ENI
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The zone ID of the endpoint.
     *
     * This parameter is returned only when the endpoint type is **NLB**.
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $endpointZoneId;

    /**
     * @description The accelerated IP address.
     *
     * @example 116.132.XX.XX
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description The status of the mapping between the accelerated IP address and endpoint.
     *
     * A value of **active** indicates that the accelerated IP address is associated with the endpoint.
     * @example active
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerateIpId'         => 'AccelerateIpId',
        'acceleratorId'          => 'AcceleratorId',
        'endpointAddress'        => 'EndpointAddress',
        'endpointId'             => 'EndpointId',
        'endpointName'           => 'EndpointName',
        'endpointSubAddress'     => 'EndpointSubAddress',
        'endpointSubAddressType' => 'EndpointSubAddressType',
        'endpointType'           => 'EndpointType',
        'endpointZoneId'         => 'EndpointZoneId',
        'ipAddress'              => 'IpAddress',
        'state'                  => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpId) {
            $res['AccelerateIpId'] = $this->accelerateIpId;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->endpointAddress) {
            $res['EndpointAddress'] = $this->endpointAddress;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['EndpointName'] = $this->endpointName;
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
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accelerateIpEndpointRelations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpId'])) {
            $model->accelerateIpId = $map['AccelerateIpId'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['EndpointAddress'])) {
            $model->endpointAddress = $map['EndpointAddress'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointName'])) {
            $model->endpointName = $map['EndpointName'];
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
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
