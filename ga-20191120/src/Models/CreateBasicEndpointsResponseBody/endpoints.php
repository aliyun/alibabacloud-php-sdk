<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\CreateBasicEndpointsResponseBody;

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
     * @description The ID of the endpoint.
     *
     * @example ep-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointId;

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
     *   **ENI**: ENI.
     *   **SLB**: CLB instance.
     *   **ECS**: ECS instance.
     *   **NLB**: NLB instance.
     *
     * @example ENI
     *
     * @var string
     */
    public $endpointType;
    protected $_name = [
        'endpointAddress'    => 'EndpointAddress',
        'endpointId'         => 'EndpointId',
        'endpointSubAddress' => 'EndpointSubAddress',
        'endpointType'       => 'EndpointType',
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
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointSubAddress) {
            $res['EndpointSubAddress'] = $this->endpointSubAddress;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointSubAddress'])) {
            $model->endpointSubAddress = $map['EndpointSubAddress'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }

        return $model;
    }
}
