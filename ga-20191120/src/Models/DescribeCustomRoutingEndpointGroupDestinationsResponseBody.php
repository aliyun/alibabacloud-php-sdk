<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomRoutingEndpointGroupDestinationsResponseBody extends Model
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
     * @description The ID of the endpoint group mapping configuration.
     *
     * @example dst-123abc****
     *
     * @var string
     */
    public $destinationId;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The start port of the backend service port range of the endpoint group.
     *
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The ID of the listener.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The backend service protocol of the endpoint group.
     *
     *   **tcp**: TCP
     *   **udp**: UDP
     *   **tcp,udp**: TCP and UDP
     *
     * @var string[]
     */
    public $protocols;

    /**
     * @description The ID of the request.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The end port of the backend service port range of the endpoint group.
     *
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'acceleratorId'   => 'AcceleratorId',
        'destinationId'   => 'DestinationId',
        'endpointGroupId' => 'EndpointGroupId',
        'fromPort'        => 'FromPort',
        'listenerId'      => 'ListenerId',
        'protocols'       => 'Protocols',
        'requestId'       => 'RequestId',
        'state'           => 'State',
        'toPort'          => 'ToPort',
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
        if (null !== $this->destinationId) {
            $res['DestinationId'] = $this->destinationId;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomRoutingEndpointGroupDestinationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['DestinationId'])) {
            $model->destinationId = $map['DestinationId'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
