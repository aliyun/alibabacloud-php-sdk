<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndpointResponseBody\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class DescribeCustomRoutingEndpointResponseBody extends Model
{
    /**
     * @description The ID of the GA instance with which the endpoint is associated.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The name of the endpoint (vSwitch).
     *
     * @example vsw-test01
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The ID of the endpoint group to which the endpoint belongs.
     *
     * @example epg-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The ID of the endpoint.
     *
     * @example ep-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the listener with which the endpoint is associated.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The ID of the request.
     *
     * @example String	04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service ID to which the managed instance belongs.
     *
     * >  Valid only when the ServiceManaged parameter is True.。
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Is it a managed instance. Value：
     *
     * - false
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description A list of action policies that users can execute on this managed instance.
     *
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;

    /**
     * @description The status of the endpoint .
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The access policy of traffic for the specified endpoint. Valid values:
     *
     *   **AllowAll**: allows all traffic to the endpoint.
     *   **DenyAll**: denies all traffic to the endpoint.
     *   **AllowCustom**: allows traffic only to specified destinations.
     *
     * @example DenyAll
     *
     * @var string
     */
    public $trafficToEndpointPolicy;

    /**
     * @description The backend service type of the endpoint.
     *
     * Set the value to **PrivateSubNet**, which indicates private CIDR blocks.
     * @example PrivateSubNet
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'acceleratorId'           => 'AcceleratorId',
        'endpoint'                => 'Endpoint',
        'endpointGroupId'         => 'EndpointGroupId',
        'endpointId'              => 'EndpointId',
        'listenerId'              => 'ListenerId',
        'requestId'               => 'RequestId',
        'serviceId'               => 'ServiceId',
        'serviceManaged'          => 'ServiceManaged',
        'serviceManagedInfos'     => 'ServiceManagedInfos',
        'state'                   => 'State',
        'trafficToEndpointPolicy' => 'TrafficToEndpointPolicy',
        'type'                    => 'Type',
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
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceManagedInfos) {
            $res['ServiceManagedInfos'] = [];
            if (null !== $this->serviceManagedInfos && \is_array($this->serviceManagedInfos)) {
                $n = 0;
                foreach ($this->serviceManagedInfos as $item) {
                    $res['ServiceManagedInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->trafficToEndpointPolicy) {
            $res['TrafficToEndpointPolicy'] = $this->trafficToEndpointPolicy;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomRoutingEndpointResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceManagedInfos'])) {
            if (!empty($map['ServiceManagedInfos'])) {
                $model->serviceManagedInfos = [];
                $n                          = 0;
                foreach ($map['ServiceManagedInfos'] as $item) {
                    $model->serviceManagedInfos[$n++] = null !== $item ? serviceManagedInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TrafficToEndpointPolicy'])) {
            $model->trafficToEndpointPolicy = $map['TrafficToEndpointPolicy'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
