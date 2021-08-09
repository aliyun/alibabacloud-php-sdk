<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListEndpointGroupsResponseBody\endpointGroups;

use AlibabaCloud\Tea\Model;

class endpointConfigurations extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $enableClientIPPreservation;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $probeProtocol;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $probePort;

    /**
     * @var string
     */
    public $endpointId;
    protected $_name = [
        'type'                       => 'Type',
        'enableClientIPPreservation' => 'EnableClientIPPreservation',
        'weight'                     => 'Weight',
        'probeProtocol'              => 'ProbeProtocol',
        'endpoint'                   => 'Endpoint',
        'probePort'                  => 'ProbePort',
        'endpointId'                 => 'EndpointId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->enableClientIPPreservation) {
            $res['EnableClientIPPreservation'] = $this->enableClientIPPreservation;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->probeProtocol) {
            $res['ProbeProtocol'] = $this->probeProtocol;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->probePort) {
            $res['ProbePort'] = $this->probePort;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['EnableClientIPPreservation'])) {
            $model->enableClientIPPreservation = $map['EnableClientIPPreservation'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['ProbeProtocol'])) {
            $model->probeProtocol = $map['ProbeProtocol'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ProbePort'])) {
            $model->probePort = $map['ProbePort'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        return $model;
    }
}
