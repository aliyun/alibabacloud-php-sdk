<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer4RulePolicyRequest extends Model
{
    /**
     * @description The port forwarding rule that you want to manage.
     *
     * Each port forwarding rule contains the following fields:
     *
     *   **InstanceId**: the ID of the instance. This field is required and must be of the STRING type.
     *
     *   **Protocol**: the forwarding protocol. This field is required and must be of the STRING type. Valid values: **tcp** and **udp**.
     *
     *   **FrontendPort**: the forwarding port. This field is required and must be of the INTEGER type.
     *
     *   **BackendPort**: the port of the origin server. This field is required and must be of the INTEGER type.
     *
     *   **PriRealServers**: the IP addresses of the primary origin server. This field is required and must be a JSON array. Each element in a JSON array indicates an IP address of the primary origin server. You can configure a maximum of 20 IP addresses.
     *
     * Each element in the JSON array contains the following field:
     *
     *   **RealServer**: the IP address of the primary origin server. This field is required and must be of the STRING type.
     *
     *   **SecRealServers**: the IP addresses of the secondary origin server. This field is required and must be a JSON array. Each element in a JSON array indicates an IP address of the secondary origin server. You can configure a maximum of 20 IP addresses.
     *
     * Each element in the JSON array contains the following field:
     *
     *   **RealServer**: the IP address of the secondary origin server. This field is required and must be of the STRING type.
     *
     *   **CurrentRsIndex**: the origin server that you want to use to receive service traffic. This field is required and must be of the INTEGER type. Valid values:
     *
     *   **1**: the primary origin server, which indicates that Anti-DDoS Pro or Anti-DDoS Premium forwards service traffic to the IP addresses of the primary origin server.
     *   **2**: the secondary origin server, which indicates that Anti-DDoS Pro or Anti-DDoS Premium forwards service traffic to the IP addresses of the secondary origin server.
     *
     * @example [{\"InstanceId\":\"ddosDip-sg-4hr2b3l****\",\"Protocol\":\"udp\",\"FrontendPort\":2020,\"BackendPort\":2022,\"PriRealServers\":[{\"RealServer\":\"192.0.2.1\"},{\"RealServer\":\"192.0.2.2\"}],\"SecRealServers\":[{\"RealServer\":\"192.0.2.3\"},{\"RealServer\":\"192.0.2.4\"}],\"CurrentRsIndex\":1}]
     *
     * @var string
     */
    public $listeners;
    protected $_name = [
        'listeners' => 'Listeners',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listeners) {
            $res['Listeners'] = $this->listeners;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer4RulePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Listeners'])) {
            $model->listeners = $map['Listeners'];
        }

        return $model;
    }
}
