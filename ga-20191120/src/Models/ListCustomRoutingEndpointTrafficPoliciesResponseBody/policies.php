<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointTrafficPoliciesResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointTrafficPoliciesResponseBody\policies\portRanges;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingEndpointTrafficPoliciesResponseBody\policies\serviceManagedInfos;
use AlibabaCloud\Tea\Model;

class policies extends Model
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
     * @description The IP address of the traffic destination.
     *
     * @example 10.0.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of the endpoint group to which the endpoint belongs.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The ID of the endpoint to which the traffic destination belongs.
     *
     * @example ep-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the custom routing listener with which the endpoint is associated.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The traffic policy ID.
     *
     * @example ply-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The port range of the traffic policy.
     *
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @description The ID of the service that manages the GA instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     * @example ALB
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Indicates whether the GA instance is managed. Valid values:
     *
     *   **true**: The GA instance is managed.
     *   **false**: The GA instance is not managed.
     *
     * @example true
     *
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The actions that you can perform on the managed instance.
     *
     * >  This parameter takes effect only if **ServiceManaged** is set to **True**.
     *
     *   You can perform only specific actions on a managed instance.
     *
     * @var serviceManagedInfos[]
     */
    public $serviceManagedInfos;
    protected $_name = [
        'acceleratorId'       => 'AcceleratorId',
        'address'             => 'Address',
        'endpointGroupId'     => 'EndpointGroupId',
        'endpointId'          => 'EndpointId',
        'listenerId'          => 'ListenerId',
        'policyId'            => 'PolicyId',
        'portRanges'          => 'PortRanges',
        'serviceId'           => 'ServiceId',
        'serviceManaged'      => 'ServiceManaged',
        'serviceManagedInfos' => 'ServiceManagedInfos',
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
        if (null !== $this->address) {
            $res['Address'] = $this->address;
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
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->portRanges) {
            $res['PortRanges'] = [];
            if (null !== $this->portRanges && \is_array($this->portRanges)) {
                $n = 0;
                foreach ($this->portRanges as $item) {
                    $res['PortRanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
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
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PortRanges'])) {
            if (!empty($map['PortRanges'])) {
                $model->portRanges = [];
                $n                 = 0;
                foreach ($map['PortRanges'] as $item) {
                    $model->portRanges[$n++] = null !== $item ? portRanges::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
