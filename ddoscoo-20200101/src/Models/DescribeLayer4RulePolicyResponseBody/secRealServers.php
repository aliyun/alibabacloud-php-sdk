<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyResponseBody;

use AlibabaCloud\Tea\Model;

class secRealServers extends Model
{
    /**
     * @description The origin server that is used to receive service traffic. Valid values:
     *
     *   **1**: the primary origin server, which indicates that Anti-DDoS Pro or Anti-DDoS Premium forwards service traffic to the IP addresses of the primary origin server.
     *   **2**: the secondary origin server, which indicates that Anti-DDoS Pro or Anti-DDoS Premium forwards service traffic to the IP addresses of the secondary origin server.
     *
     * @example 1
     *
     * @var int
     */
    public $currentIndex;

    /**
     * @description The IP address of the instance.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $eip;

    /**
     * @description The forwarding port.
     *
     * @example 2020
     *
     * @var int
     */
    public $frontendPort;

    /**
     * @description The ID of the instance.
     *
     * @example ddosDip-sg-4hr2b3l****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the protocol.
     *
     * @example udp
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The IP address of the secondary origin server.
     *
     * @example 192.0.2.3
     *
     * @var string
     */
    public $realServer;
    protected $_name = [
        'currentIndex' => 'CurrentIndex',
        'eip'          => 'Eip',
        'frontendPort' => 'FrontendPort',
        'instanceId'   => 'InstanceId',
        'protocol'     => 'Protocol',
        'realServer'   => 'RealServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentIndex) {
            $res['CurrentIndex'] = $this->currentIndex;
        }
        if (null !== $this->eip) {
            $res['Eip'] = $this->eip;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->realServer) {
            $res['RealServer'] = $this->realServer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secRealServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentIndex'])) {
            $model->currentIndex = $map['CurrentIndex'];
        }
        if (isset($map['Eip'])) {
            $model->eip = $map['Eip'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RealServer'])) {
            $model->realServer = $map['RealServer'];
        }

        return $model;
    }
}
