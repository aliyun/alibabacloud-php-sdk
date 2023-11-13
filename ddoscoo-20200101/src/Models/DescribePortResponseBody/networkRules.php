<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortResponseBody;

use AlibabaCloud\Tea\Model;

class networkRules extends Model
{
    /**
     * @description The port of the origin server.
     *
     * @example 55
     *
     * @var int
     */
    public $backendPort;

    /**
     * @description The forwarding port.
     *
     * @example 55
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description The type of the protocol. Valid values:
     *
     *   **tcp**
     *   **udp**
     *
     * @example tcp
     *
     * @var string
     */
    public $frontendProtocol;

    /**
     * @description The ID of the instance to which the port forwarding rule is applied.
     *
     * @example ddoscoo-cn-7e225i41****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the port forwarding rule is automatically created by the instance. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $isAutoCreate;

    /**
     * @description An array that consists of IP addresses of origin servers.
     *
     * @var string[]
     */
    public $realServers;
    protected $_name = [
        'backendPort'      => 'BackendPort',
        'frontendPort'     => 'FrontendPort',
        'frontendProtocol' => 'FrontendProtocol',
        'instanceId'       => 'InstanceId',
        'isAutoCreate'     => 'IsAutoCreate',
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
        if (null !== $this->isAutoCreate) {
            $res['IsAutoCreate'] = $this->isAutoCreate;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkRules
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
        if (isset($map['IsAutoCreate'])) {
            $model->isAutoCreate = $map['IsAutoCreate'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }

        return $model;
    }
}
