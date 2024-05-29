<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyResponseBody\priRealServers;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeLayer4RulePolicyResponseBody\secRealServers;
use AlibabaCloud\Tea\Model;

class DescribeLayer4RulePolicyResponseBody extends Model
{
    /**
     * @description The port of the origin server.
     *
     * @example 2022
     *
     * @var int
     */
    public $backendPort;

    /**
     * @description The mode that is used to forward service traffic. Valid values:
     *
     *   0: the default mode. In this mode, Anti-DDoS Pro or Anti-DDoS Premium forwards service traffic to the origin IP address that you specified when you created the port forwarding rule. You can call the [CreateNetworkRules](https://help.aliyun.com/document_detail/157482.html) operation to create a port forwarding rule.
     *   1: the origin redundancy mode. In this mode, Anti-DDoS Pro or Anti-DDoS Premium forwards service traffic to the IP addresses of the primary or secondary origin servers. You can call the [ConfigLayer4RulePolicy](https://help.aliyun.com/document_detail/312684.html) operation to configure IP addresses.
     *
     * @example 1
     *
     * @var string
     */
    public $bakMode;

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
     * @description The type of the protocol.
     *
     * @example udp
     *
     * @var string
     */
    public $forwardProtocol;

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
     * @description An array that consists of the information about the primary origin server, including the IP addresses, forwarding protocol, and forwarding port.
     *
     * @var priRealServers[]
     */
    public $priRealServers;

    /**
     * @description The ID of the request.
     *
     * @example 6E46CC51-36BE-1100-B14C-DAF8381B8F73
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the information about the secondary origin server, including the IP addresses, forwarding protocol, and forwarding port.
     *
     * @var secRealServers[]
     */
    public $secRealServers;
    protected $_name = [
        'backendPort'     => 'BackendPort',
        'bakMode'         => 'BakMode',
        'currentIndex'    => 'CurrentIndex',
        'forwardProtocol' => 'ForwardProtocol',
        'frontendPort'    => 'FrontendPort',
        'instanceId'      => 'InstanceId',
        'priRealServers'  => 'PriRealServers',
        'requestId'       => 'RequestId',
        'secRealServers'  => 'SecRealServers',
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
        if (null !== $this->bakMode) {
            $res['BakMode'] = $this->bakMode;
        }
        if (null !== $this->currentIndex) {
            $res['CurrentIndex'] = $this->currentIndex;
        }
        if (null !== $this->forwardProtocol) {
            $res['ForwardProtocol'] = $this->forwardProtocol;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->priRealServers) {
            $res['PriRealServers'] = [];
            if (null !== $this->priRealServers && \is_array($this->priRealServers)) {
                $n = 0;
                foreach ($this->priRealServers as $item) {
                    $res['PriRealServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secRealServers) {
            $res['SecRealServers'] = [];
            if (null !== $this->secRealServers && \is_array($this->secRealServers)) {
                $n = 0;
                foreach ($this->secRealServers as $item) {
                    $res['SecRealServers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLayer4RulePolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }
        if (isset($map['BakMode'])) {
            $model->bakMode = $map['BakMode'];
        }
        if (isset($map['CurrentIndex'])) {
            $model->currentIndex = $map['CurrentIndex'];
        }
        if (isset($map['ForwardProtocol'])) {
            $model->forwardProtocol = $map['ForwardProtocol'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PriRealServers'])) {
            if (!empty($map['PriRealServers'])) {
                $model->priRealServers = [];
                $n                     = 0;
                foreach ($map['PriRealServers'] as $item) {
                    $model->priRealServers[$n++] = null !== $item ? priRealServers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecRealServers'])) {
            if (!empty($map['SecRealServers'])) {
                $model->secRealServers = [];
                $n                     = 0;
                foreach ($map['SecRealServers'] as $item) {
                    $model->secRealServers[$n++] = null !== $item ? secRealServers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
