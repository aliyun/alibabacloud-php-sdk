<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ConfigEndpointProbeRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not set this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** may be different for each API request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable latency monitoring. Default value: false. Valid values:
     *
     *   **true**: enables latency monitoring.
     *   **false**: disables latency monitoring.
     *
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @description The endpoint.
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The type of endpoint. Valid values:
     *
     *   **Ip**: a custom IP address
     *   **Domain**: a custom domain name
     *   **EIP**: an Alibaba Cloud elastic IP address (EIP)
     *   **PublicIp**: an Alibaba Cloud public IP address
     *
     * @example Ip
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description The port that is used to monitor latency. Valid values: **0** to **65535**.
     *
     * @example 80
     *
     * @var string
     */
    public $probePort;

    /**
     * @description The protocol that is used to monitor latency. Valid values:
     *
     *   **tcp**
     *   **icmp**
     *
     * @example tcp
     *
     * @var string
     */
    public $probeProtocol;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'enable'          => 'Enable',
        'endpoint'        => 'Endpoint',
        'endpointGroupId' => 'EndpointGroupId',
        'endpointType'    => 'EndpointType',
        'probePort'       => 'ProbePort',
        'probeProtocol'   => 'ProbeProtocol',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->probePort) {
            $res['ProbePort'] = $this->probePort;
        }
        if (null !== $this->probeProtocol) {
            $res['ProbeProtocol'] = $this->probeProtocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigEndpointProbeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['ProbePort'])) {
            $model->probePort = $map['ProbePort'];
        }
        if (isset($map['ProbeProtocol'])) {
            $model->probeProtocol = $map['ProbeProtocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
