<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointsRequest;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The address of the endpoint.
     *
     * @example eni-bp1a05txelswuj8g****
     *
     * @var string
     */
    public $endpointAddress;

    /**
     * @description The secondary address of the endpoint.
     *
     * This parameter is required if the endpoint type is **ECS**, **ENI**, or **NLB**.
     *
     *   If the endpoint type is **ECS**, you can set the **EndpointSubAddress** parameter to the secondary private IP address of the primary ENI. If the parameter is left empty, the primary private IP address of the primary ENI is used.
     *   If the endpoint type is **ENI**, you can set the **EndpointSubAddress** parameter to the secondary private IP address of the secondary ENI. If the parameter is left empty, the primary private IP address of the secondary ENI is used.
     *   This parameter is required if the endpoint type is **NLB**. **EndpointSubAddress** is the primary private IP address of the NLB backend server.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $endpointSubAddress;

    /**
     * @description The type of the secondary address of the endpoint. Valid values:
     *
     *   **primary**: a primary private IP address.
     *   **secondary**: a secondary private IP address.
     *
     * This parameter is required if the endpoint type is **ECS**, **ENI**, or **NLB**. If the endpoint type is **NLB**, only **primary** is supported.
     * @example primary
     *
     * @var string
     */
    public $endpointSubAddressType;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **ENI**: elastic network interface (ENI).
     *   **SLB**: Classic Load Balancer (CLB) instance.
     *   **ECS**: Elastic Compute Service (ECS) instance.
     *   **NLB**: Network Load Balancer (NLB) instance.
     *
     * >  This parameter is required.
     * @example ENI
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The ID of the zone where the endpoint resides.
     *
     * This parameter is required only if the endpoint type is **NLB**.
     * @example cn-hangzhou-g
     *
     * @var string
     */
    public $endpointZoneId;

    /**
     * @description The name of the endpoint.
     *
     * The name must be 2 to 64 characters in length, and can contain letters, digits, underscores (\_), and hyphens (-). The name must start with a letter.
     * @example ep01
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'endpointAddress'        => 'EndpointAddress',
        'endpointSubAddress'     => 'EndpointSubAddress',
        'endpointSubAddressType' => 'EndpointSubAddressType',
        'endpointType'           => 'EndpointType',
        'endpointZoneId'         => 'EndpointZoneId',
        'name'                   => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointAddress) {
            $res['EndpointAddress'] = $this->endpointAddress;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointAddress'])) {
            $model->endpointAddress = $map['EndpointAddress'];
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

        return $model;
    }
}
