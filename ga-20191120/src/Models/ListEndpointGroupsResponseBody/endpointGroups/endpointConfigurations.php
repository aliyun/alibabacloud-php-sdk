<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups;

use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @description Indicates whether the client IP address preservation feature is enabled. Valid values:
     *
     *   **true**: The client IP address preservation feature is enabled.
     *   **false**: The client IP address preservation feature is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableClientIPPreservation;

    /**
     * @description The IP address or domain name of the endpoint.
     *
     * @example 47.1.XX.XX
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The ID of the endpoint.
     *
     * @example ep-bp1d2utp8qqe2a44t****
     *
     * @var string
     */
    public $endpointId;

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
     *   **icmp**: ICMP
     *   **tcp**: TCP
     *
     * @example tcp
     *
     * @var string
     */
    public $probeProtocol;

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
        'endpoint'                   => 'Endpoint',
        'endpointId'                 => 'EndpointId',
        'probePort'                  => 'ProbePort',
        'probeProtocol'              => 'ProbeProtocol',
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
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->probePort) {
            $res['ProbePort'] = $this->probePort;
        }
        if (null !== $this->probeProtocol) {
            $res['ProbeProtocol'] = $this->probeProtocol;
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
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['ProbePort'])) {
            $model->probePort = $map['ProbePort'];
        }
        if (isset($map['ProbeProtocol'])) {
            $model->probeProtocol = $map['ProbeProtocol'];
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
