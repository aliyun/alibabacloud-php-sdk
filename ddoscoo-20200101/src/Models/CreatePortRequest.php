<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CreatePortRequest extends Model
{
    /**
     * @description The port of the origin server. Valid values: **0** to **65535**.
     *
     * @example 55
     *
     * @var string
     */
    public $backendPort;

    /**
     * @description The forwarding port. Valid values: **0** to **65535**.
     *
     * This parameter is required.
     * @example 55
     *
     * @var string
     */
    public $frontendPort;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * This parameter is required.
     * @example tcp
     *
     * @var string
     */
    public $frontendProtocol;

    /**
     * @description The ID of the Anti-DDoS Pro or Anti-DDoS Premium instance to which the port forwarding rule belongs.
     *
     * This parameter is required.
     * @example ddoscoo-cn-st21zbyq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description An array that consists of the IP addresses of origin servers.
     *
     * This parameter is required.
     * @var string[]
     */
    public $realServers;
    protected $_name = [
        'backendPort'      => 'BackendPort',
        'frontendPort'     => 'FrontendPort',
        'frontendProtocol' => 'FrontendProtocol',
        'instanceId'       => 'InstanceId',
        'realServers'      => 'RealServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendPort) {
            $res['BackendPort'] = $this->backendPort;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->frontendProtocol) {
            $res['FrontendProtocol'] = $this->frontendProtocol;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePortRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['FrontendProtocol'])) {
            $model->frontendProtocol = $map['FrontendProtocol'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }

        return $model;
    }
}
