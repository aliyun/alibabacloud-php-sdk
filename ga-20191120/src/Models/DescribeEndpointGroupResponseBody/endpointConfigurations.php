<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\DescribeEndpointGroupResponseBody;

use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @description Indicates whether the client IP address preservation feature is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $enableClientIPPreservation;

    /**
     * @description Indicates whether the proxy protocol is used to preserve client IP addresses.
     *
     * @example false
     *
     * @var bool
     */
    public $enableProxyProtocol;

    /**
     * @description The IP address or domain name of the endpoint.
     *
     * @example 120.XX.XX.21
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The port that is used to monitor latency.
     *
     * @example 80
     *
     * @var int
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
     * @description The private IP address of the ENI.
     *
     * @example 172.168.XX.XX
     *
     * @var string
     */
    public $subAddress;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Domain**: a custom domain name
     *   **Ip**: a custom IP address
     *   **PublicIp**: a public IP address provided by Alibaba Cloud
     *   **ECS**: an Elastic Compute Service (ECS) instance
     *   **SLB**: a Server Load Balancer (SLB) instance
     *   **ALB**: an Application Load Balancer (ALB) instance
     *   **OSS**: an Object Storage Service (OSS) bucket
     *
     * @example Ip
     *
     * @var string
     */
    public $type;

    /**
     * @description The weight of the endpoint.
     *
     * @example 20
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'enableClientIPPreservation' => 'EnableClientIPPreservation',
        'enableProxyProtocol'        => 'EnableProxyProtocol',
        'endpoint'                   => 'Endpoint',
        'probePort'                  => 'ProbePort',
        'probeProtocol'              => 'ProbeProtocol',
        'subAddress'                 => 'SubAddress',
        'type'                       => 'Type',
        'weight'                     => 'Weight',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableClientIPPreservation) {
            $res['EnableClientIPPreservation'] = $this->enableClientIPPreservation;
        }
        if (null !== $this->enableProxyProtocol) {
            $res['EnableProxyProtocol'] = $this->enableProxyProtocol;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->probePort) {
            $res['ProbePort'] = $this->probePort;
        }
        if (null !== $this->probeProtocol) {
            $res['ProbeProtocol'] = $this->probeProtocol;
        }
        if (null !== $this->subAddress) {
            $res['SubAddress'] = $this->subAddress;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpointConfigurations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableClientIPPreservation'])) {
            $model->enableClientIPPreservation = $map['EnableClientIPPreservation'];
        }
        if (isset($map['EnableProxyProtocol'])) {
            $model->enableProxyProtocol = $map['EnableProxyProtocol'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ProbePort'])) {
            $model->probePort = $map['ProbePort'];
        }
        if (isset($map['ProbeProtocol'])) {
            $model->probeProtocol = $map['ProbeProtocol'];
        }
        if (isset($map['SubAddress'])) {
            $model->subAddress = $map['SubAddress'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        return $model;
    }
}
