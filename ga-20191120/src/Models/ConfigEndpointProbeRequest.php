<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ConfigEndpointProbeRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable latency monitoring. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * This parameter is required.
     * @example true
     *
     * @var string
     */
    public $enable;

    /**
     * @description The endpoint.
     *
     * This parameter is required.
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The endpoint group ID.
     *
     * This parameter is required.
     * @example epg-bp1dmlohjjz4kqaun****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Ip:** a custom IP address.
     *   **Domain:** a custom domain name.
     *   **EIP:** an Alibaba Cloud elastic IP address (EIP).
     *   **PublicIp:** an Alibaba Cloud public IP address.
     *
     * This parameter is required.
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
     *   **tcp:** TCP.
     *   **icmp:** ICMP.
     *
     * @example tcp
     *
     * @var string
     */
    public $probeProtocol;

    /**
     * @description The region ID of the GA instance. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
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
