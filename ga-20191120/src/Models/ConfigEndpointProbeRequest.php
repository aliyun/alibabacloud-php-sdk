<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ConfigEndpointProbeRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $endpointGroupId;

    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $probeProtocol;

    /**
     * @var string
     */
    public $probePort;

    /**
     * @var string
     */
    public $enable;
    protected $_name = [
        'regionId'        => 'RegionId',
        'clientToken'     => 'ClientToken',
        'endpointGroupId' => 'EndpointGroupId',
        'endpointType'    => 'EndpointType',
        'endpoint'        => 'Endpoint',
        'probeProtocol'   => 'ProbeProtocol',
        'probePort'       => 'ProbePort',
        'enable'          => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->probeProtocol) {
            $res['ProbeProtocol'] = $this->probeProtocol;
        }
        if (null !== $this->probePort) {
            $res['ProbePort'] = $this->probePort;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ProbeProtocol'])) {
            $model->probeProtocol = $map['ProbeProtocol'];
        }
        if (isset($map['ProbePort'])) {
            $model->probePort = $map['ProbePort'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
