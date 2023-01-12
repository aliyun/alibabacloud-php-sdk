<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListCustomRoutingPortMappingsResponseBody\portMappings\destinationSocketAddress;
use AlibabaCloud\Tea\Model;

class portMappings extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The acceleration port.
     *
     * @example 3000
     *
     * @var int
     */
    public $acceleratorPort;

    /**
     * @description The service IP address and port of the backend instance.
     *
     * @var destinationSocketAddress
     */
    public $destinationSocketAddress;

    /**
     * @description The access policy of traffic for the backend instance. Valid values:
     *
     *   **allow**: allows traffic to the backend instance.
     *   **deny**: denies traffic to the backend instance.
     *
     * @example allow
     *
     * @var string
     */
    public $destinationTrafficState;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The ID of the region in which the endpoint group resides.
     *
     * @example us-west-1
     *
     * @var string
     */
    public $endpointGroupRegion;

    /**
     * @description The ID of the endpoint.
     *
     * @example ep-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the listener.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The protocol of the backend service.
     *
     *   **tcp**: TCP
     *   **udp**: UDP
     *
     * @var string[]
     */
    public $protocols;

    /**
     * @description The name of the endpoint (vSwitch).
     *
     * @example vsw-test01
     *
     * @var string
     */
    public $vswitch;
    protected $_name = [
        'acceleratorId'            => 'AcceleratorId',
        'acceleratorPort'          => 'AcceleratorPort',
        'destinationSocketAddress' => 'DestinationSocketAddress',
        'destinationTrafficState'  => 'DestinationTrafficState',
        'endpointGroupId'          => 'EndpointGroupId',
        'endpointGroupRegion'      => 'EndpointGroupRegion',
        'endpointId'               => 'EndpointId',
        'listenerId'               => 'ListenerId',
        'protocols'                => 'Protocols',
        'vswitch'                  => 'Vswitch',
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
        if (null !== $this->acceleratorPort) {
            $res['AcceleratorPort'] = $this->acceleratorPort;
        }
        if (null !== $this->destinationSocketAddress) {
            $res['DestinationSocketAddress'] = null !== $this->destinationSocketAddress ? $this->destinationSocketAddress->toMap() : null;
        }
        if (null !== $this->destinationTrafficState) {
            $res['DestinationTrafficState'] = $this->destinationTrafficState;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointGroupRegion) {
            $res['EndpointGroupRegion'] = $this->endpointGroupRegion;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['AcceleratorPort'])) {
            $model->acceleratorPort = $map['AcceleratorPort'];
        }
        if (isset($map['DestinationSocketAddress'])) {
            $model->destinationSocketAddress = destinationSocketAddress::fromMap($map['DestinationSocketAddress']);
        }
        if (isset($map['DestinationTrafficState'])) {
            $model->destinationTrafficState = $map['DestinationTrafficState'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointGroupRegion'])) {
            $model->endpointGroupRegion = $map['EndpointGroupRegion'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }

        return $model;
    }
}
