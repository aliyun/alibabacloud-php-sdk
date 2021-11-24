<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ConfigEndpointProbeRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $endpoint;

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
    public $probePort;

    /**
     * @var string
     */
    public $probeProtocol;

    /**
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
