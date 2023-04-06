<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCustomRoutingEndPointTrafficPolicyResponseBody\portRanges;
use AlibabaCloud\Tea\Model;

class DescribeCustomRoutingEndPointTrafficPolicyResponseBody extends Model
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
     * @description The name of the vSwitch to which the traffic destination belongs.
     *
     * @example vsw-test01
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The ID of the endpoint group to which the endpoint belongs.
     *
     * @example epg-bp1bpn0kn908w4nb****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The ID of the endpoint to which the traffic destination belongs.
     *
     * @example ep-2zewuzypq5e6r3pfh****
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
     * @description The ID of the traffic destination.
     *
     * @example ply-bptest2****
     *
     * @var string
     */
    public $policyId;

    /**
     * @description The port range of the traffic destination.
     *
     * @var portRanges[]
     */
    public $portRanges;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the traffic destination.
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
        'acceleratorId'   => 'AcceleratorId',
        'address'         => 'Address',
        'endpoint'        => 'Endpoint',
        'endpointGroupId' => 'EndpointGroupId',
        'endpointId'      => 'EndpointId',
        'listenerId'      => 'ListenerId',
        'policyId'        => 'PolicyId',
        'portRanges'      => 'PortRanges',
        'requestId'       => 'RequestId',
        'state'           => 'State',
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
     * @return DescribeCustomRoutingEndPointTrafficPolicyResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
