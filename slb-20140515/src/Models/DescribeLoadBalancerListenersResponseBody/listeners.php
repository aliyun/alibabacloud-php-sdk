<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\HTTPListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\HTTPSListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\tags;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\TCPListenerConfig;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeLoadBalancerListenersResponseBody\listeners\UDPListenerConfig;
use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-a2do9e413e0spzasx****
     *
     * @var string
     */
    public $aclId;

    /**
     * @description Indicates whether access control is enabled. Valid values:
     *
     *   **on**: yes
     *   **off**: no
     *
     * @example off
     *
     * @var string
     */
    public $aclStatus;

    /**
     * @description The type of the network access control list (ACL). Valid values:
     *
     *   **white**: a whitelist. Only requests from the IP addresses or CIDR blocks in the network ACL are forwarded. Whitelists apply to scenarios in which you want to allow only specific IP addresses to access an application. Your service may be adversely affected if the whitelist is not properly configured. After a whitelist is configured, only requests from IP addresses that are added to the whitelist are forwarded by the listener.
     *
     * If you enable a whitelist but do not add an IP address to the whitelist, the listener forwards all requests.
     *
     *   **black**: a blacklist. All requests from the IP addresses or CIDR blocks in the network ACL are denied. A blacklist applies to scenarios in which you want to deny access from specific IP addresses.
     *
     * If a blacklist is configured for a listener but no IP address is added to the blacklist, the listener forwards all requests.
     * @example white
     *
     * @var string
     */
    public $aclType;

    /**
     * @description The port of the backend server.
     *
     * >  This parameter takes effect when the `VServerGroupId` parameter and the `MasterSlaveServerGroupId` parameter are empty.
     * @example 80
     *
     * @var int
     */
    public $backendServerPort;

    /**
     * @description The maximum bandwidth of the listener. Unit: Mbit/s. Valid values:
     *
     *   **-1**: If -1 is returned, it indicates that the bandwidth of the listener is unlimited.
     *   **1 to 5120**: If a value from 1 to 5120 is returned, the value indicates the maximum bandwidth of the listener. The sum of the maximum bandwidth of all listeners added to a CLB instance does not exceed the maximum bandwidth of the CLB instance.
     *
     * @example -1
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The description of the listener.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The configuration of the HTTP listener.
     *
     * @var HTTPListenerConfig
     */
    public $HTTPListenerConfig;

    /**
     * @description The configuration of the HTTPS listener.
     *
     * @var HTTPSListenerConfig
     */
    public $HTTPSListenerConfig;

    /**
     * @description The listening port.
     *
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The protocol used by the listener.
     *
     * @example http
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the CLB instance.
     *
     * @example lb-bp1b6c719dfa****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The scheduling algorithm. Valid values:
     *
     *   **wrr**: Backend servers with higher weights receive more requests than those with lower weights.
     *   **rr**: Requests are distributed to backend servers in sequence.
     *
     * @example wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The status of the listener. Valid values:
     *
     *   **running**: The listener runs as expected.
     *   **stopped**: The listener is disabled.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The configuration of the TCP listener.
     *
     * @var TCPListenerConfig
     */
    public $TCPListenerConfig;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The configuration of the UDP listener.
     *
     * @var UDPListenerConfig
     */
    public $UDPListenerConfig;

    /**
     * @description The ID of the vServer group that is associated with the listener.
     *
     * @example rsp-cige6j****
     *
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'aclId'               => 'AclId',
        'aclStatus'           => 'AclStatus',
        'aclType'             => 'AclType',
        'backendServerPort'   => 'BackendServerPort',
        'bandwidth'           => 'Bandwidth',
        'description'         => 'Description',
        'HTTPListenerConfig'  => 'HTTPListenerConfig',
        'HTTPSListenerConfig' => 'HTTPSListenerConfig',
        'listenerPort'        => 'ListenerPort',
        'listenerProtocol'    => 'ListenerProtocol',
        'loadBalancerId'      => 'LoadBalancerId',
        'scheduler'           => 'Scheduler',
        'status'              => 'Status',
        'TCPListenerConfig'   => 'TCPListenerConfig',
        'tags'                => 'Tags',
        'UDPListenerConfig'   => 'UDPListenerConfig',
        'VServerGroupId'      => 'VServerGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclId) {
            $res['AclId'] = $this->aclId;
        }
        if (null !== $this->aclStatus) {
            $res['AclStatus'] = $this->aclStatus;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->backendServerPort) {
            $res['BackendServerPort'] = $this->backendServerPort;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->HTTPListenerConfig) {
            $res['HTTPListenerConfig'] = null !== $this->HTTPListenerConfig ? $this->HTTPListenerConfig->toMap() : null;
        }
        if (null !== $this->HTTPSListenerConfig) {
            $res['HTTPSListenerConfig'] = null !== $this->HTTPSListenerConfig ? $this->HTTPSListenerConfig->toMap() : null;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->TCPListenerConfig) {
            $res['TCPListenerConfig'] = null !== $this->TCPListenerConfig ? $this->TCPListenerConfig->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->UDPListenerConfig) {
            $res['UDPListenerConfig'] = null !== $this->UDPListenerConfig ? $this->UDPListenerConfig->toMap() : null;
        }
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclId'])) {
            $model->aclId = $map['AclId'];
        }
        if (isset($map['AclStatus'])) {
            $model->aclStatus = $map['AclStatus'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['BackendServerPort'])) {
            $model->backendServerPort = $map['BackendServerPort'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['HTTPListenerConfig'])) {
            $model->HTTPListenerConfig = HTTPListenerConfig::fromMap($map['HTTPListenerConfig']);
        }
        if (isset($map['HTTPSListenerConfig'])) {
            $model->HTTPSListenerConfig = HTTPSListenerConfig::fromMap($map['HTTPSListenerConfig']);
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TCPListenerConfig'])) {
            $model->TCPListenerConfig = TCPListenerConfig::fromMap($map['TCPListenerConfig']);
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UDPListenerConfig'])) {
            $model->UDPListenerConfig = UDPListenerConfig::fromMap($map['UDPListenerConfig']);
        }
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
